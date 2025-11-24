// EWARDD Chatbot
class EwarddChatbot {
    constructor() {
        this.isOpen = false;
        this.currentFlow = 'greeting';
        this.userData = {};
        this.init();
    }

    init() {
        this.createChatbotHTML();
        this.attachEventListeners();
        this.showGreeting();
    }

    createChatbotHTML() {
        const chatbotHTML = `
            <!-- Chatbot Toggle Button -->
            <button id="chatbotToggle" class="chatbot-toggle">
                <i class="fas fa-comments"></i>
            </button>

            <!-- Chatbot Widget -->
            <div id="chatbotWidget" class="chatbot-widget">
                <div class="chatbot-header">
                    <h4><i class="fas fa-robot me-2"></i>EWARDD Assist</h4>
                    <button class="chatbot-close" id="chatbotClose">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="chatbot-messages" id="chatbotMessages">
                    <!-- Messages will be added here -->
                </div>
                <div class="chat-options" id="chatOptions">
                    <!-- Options will be added here -->
                </div>
            </div>
        `;

        // Add to body
        document.body.insertAdjacentHTML('beforeend', chatbotHTML);
    }

    attachEventListeners() {
        const toggleBtn = document.getElementById('chatbotToggle');
        const closeBtn = document.getElementById('chatbotClose');
        const widget = document.getElementById('chatbotWidget');

        toggleBtn.addEventListener('click', () => this.toggleChatbot());
        closeBtn.addEventListener('click', () => this.closeChatbot());
    }

    toggleChatbot() {
        const widget = document.getElementById('chatbotWidget');
        const toggleBtn = document.getElementById('chatbotToggle');
        
        this.isOpen = !this.isOpen;
        
        if (this.isOpen) {
            widget.classList.add('active');
            toggleBtn.classList.add('hidden');
        } else {
            widget.classList.remove('active');
            toggleBtn.classList.remove('hidden');
        }
    }

    closeChatbot() {
        const widget = document.getElementById('chatbotWidget');
        const toggleBtn = document.getElementById('chatbotToggle');
        
        this.isOpen = false;
        widget.classList.remove('active');
        toggleBtn.classList.remove('hidden');
    }

    addMessage(message, type = 'bot') {
        const messagesContainer = document.getElementById('chatbotMessages');
        const messageHTML = `
            <div class="chat-message ${type}">
                <div class="message-bubble">${message}</div>
            </div>
        `;
        messagesContainer.insertAdjacentHTML('beforeend', messageHTML);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    showOptions(options) {
        const optionsContainer = document.getElementById('chatOptions');
        optionsContainer.innerHTML = '';

        options.forEach(option => {
            const button = document.createElement('button');
            button.className = 'chat-option-btn';
            button.innerHTML = `<i class="${option.icon} me-2"></i>${option.text}`;
            button.addEventListener('click', () => this.handleOption(option.action));
            optionsContainer.appendChild(button);
        });
    }

    showGreeting() {
        this.addMessage('Hi 👋 I\'m EWARDD Assist.');
        setTimeout(() => {
            this.addMessage('Need to recycle e-waste or sell IT scrap? I can help you instantly.');
            setTimeout(() => {
                this.showMainOptions();
            }, 500);
        }, 500);
    }

    showMainOptions() {
        const options = [
            { text: 'Book Free Pickup', icon: 'fas fa-calendar-check', action: 'book-pickup' },
            { text: 'Get Scrap Price', icon: 'fas fa-calculator', action: 'get-price' },
            { text: 'Corporate IT Scrap Disposal', icon: 'fas fa-building', action: 'corporate' },
            { text: 'Data Destruction', icon: 'fas fa-shield-halved', action: 'data-destruction' },
            { text: 'Talk to a Human', icon: 'fas fa-user-headset', action: 'human' }
        ];
        this.showOptions(options);
    }

    handleOption(action) {
        switch (action) {
            case 'book-pickup':
                this.bookPickupFlow();
                break;
            case 'get-price':
                this.getPriceFlow();
                break;
            case 'corporate':
                this.corporateFlow();
                break;
            case 'data-destruction':
                this.dataDestructionFlow();
                break;
            case 'human':
                this.talkToHumanFlow();
                break;
            default:
                this.showMainOptions();
        }
    }

    bookPickupFlow() {
        this.addMessage('Book Free Pickup', 'user');
        setTimeout(() => {
            this.addMessage('Great! Please share your pickup city.');
            this.showCityInput();
        }, 500);
    }

    showCityInput() {
        const optionsContainer = document.getElementById('chatOptions');
        optionsContainer.innerHTML = `
            <input type="text" class="form-control mb-2" id="cityInput" placeholder="Enter your city">
            <button class="btn btn-primary-gradient w-100" onclick="chatbot.submitCity()">
                <i class="fas fa-arrow-right me-2"></i>Continue
            </button>
        `;
    }

    submitCity() {
        const city = document.getElementById('cityInput').value;
        if (city) {
            this.userData.city = city;
            this.addMessage(city, 'user');
            setTimeout(() => {
                this.addMessage('Thanks! What items do you want to dispose of? You can also upload photos.');
                this.showItemInput();
            }, 500);
        }
    }

    showItemInput() {
        const optionsContainer = document.getElementById('chatOptions');
        optionsContainer.innerHTML = `
            <textarea class="form-control mb-2" id="itemsInput" rows="3" placeholder="List your e-waste items..."></textarea>
            <button class="btn btn-primary-gradient w-100" onclick="chatbot.submitItems()">
                <i class="fas fa-arrow-right me-2"></i>Continue
            </button>
        `;
    }

    submitItems() {
        const items = document.getElementById('itemsInput').value;
        if (items) {
            this.userData.items = items;
            this.addMessage(items, 'user');
            setTimeout(() => {
                this.addMessage('Perfect. Please share your name and phone number to confirm your booking.');
                this.showContactInput();
            }, 500);
        }
    }

    showContactInput() {
        const optionsContainer = document.getElementById('chatOptions');
        optionsContainer.innerHTML = `
            <input type="text" class="form-control mb-2" id="nameInput" placeholder="Your Name">
            <input type="tel" class="form-control mb-2" id="phoneInput" placeholder="Phone Number">
            <button class="btn btn-primary-gradient w-100" onclick="chatbot.submitContact()">
                <i class="fas fa-check me-2"></i>Confirm Booking
            </button>
        `;
    }

    submitContact() {
        const name = document.getElementById('nameInput').value;
        const phone = document.getElementById('phoneInput').value;
        
        if (name && phone) {
            this.userData.name = name;
            this.userData.phone = phone;
            
            this.addMessage(`${name} - ${phone}`, 'user');
            setTimeout(() => {
                this.addMessage('Thank you! Our team will contact you shortly to schedule your pickup. 🎉');
                setTimeout(() => {
                    this.addMessage('Is there anything else I can help you with?');
                    this.showMainOptions();
                }, 1000);
            }, 500);
        }
    }

    getPriceFlow() {
        this.addMessage('Get Scrap Price', 'user');
        setTimeout(() => {
            this.addMessage('To get an accurate price, please upload photos of your items or describe them.');
            this.showPriceInput();
        }, 500);
    }

    showPriceInput() {
        const optionsContainer = document.getElementById('chatOptions');
        optionsContainer.innerHTML = `
            <textarea class="form-control mb-2" id="priceItemsInput" rows="3" placeholder="Describe your items..."></textarea>
            <input type="tel" class="form-control mb-2" id="pricePhoneInput" placeholder="Phone Number">
            <button class="btn btn-primary-gradient w-100" onclick="chatbot.submitPriceRequest()">
                <i class="fas fa-calculator me-2"></i>Get Quote
            </button>
        `;
    }

    submitPriceRequest() {
        const items = document.getElementById('priceItemsInput').value;
        const phone = document.getElementById('pricePhoneInput').value;
        
        if (items && phone) {
            this.addMessage(`${items} - ${phone}`, 'user');
            setTimeout(() => {
                this.addMessage('Thank you! A pricing expert will reach out shortly with today\'s best price. 💰');
                setTimeout(() => {
                    this.showMainOptions();
                }, 1000);
            }, 500);
        }
    }

    corporateFlow() {
        this.addMessage('Corporate IT Scrap Disposal', 'user');
        setTimeout(() => {
            this.addMessage('We provide complete ITAD & corporate e-waste management. Please share:');
            this.showCorporateInput();
        }, 500);
    }

    showCorporateInput() {
        const optionsContainer = document.getElementById('chatOptions');
        optionsContainer.innerHTML = `
            <input type="text" class="form-control mb-2" id="companyInput" placeholder="Company Name">
            <input type="text" class="form-control mb-2" id="corpLocationInput" placeholder="Location">
            <textarea class="form-control mb-2" id="corpItemsInput" rows="2" placeholder="Item List"></textarea>
            <input type="text" class="form-control mb-2" id="corpQuantityInput" placeholder="Approx. Quantity">
            <input type="tel" class="form-control mb-2" id="corpPhoneInput" placeholder="Contact Number">
            <button class="btn btn-primary-gradient w-100" onclick="chatbot.submitCorporate()">
                <i class="fas fa-briefcase me-2"></i>Submit Request
            </button>
        `;
    }

    submitCorporate() {
        const company = document.getElementById('companyInput').value;
        const phone = document.getElementById('corpPhoneInput').value;
        
        if (company && phone) {
            this.addMessage(`${company} - ${phone}`, 'user');
            setTimeout(() => {
                this.addMessage('Thanks! Our corporate team will contact you soon. 🏢');
                setTimeout(() => {
                    this.showMainOptions();
                }, 1000);
            }, 500);
        }
    }

    dataDestructionFlow() {
        this.addMessage('Data Destruction', 'user');
        setTimeout(() => {
            this.addMessage('We offer secure on-site & off-site data destruction. Which storage devices do you want destroyed?');
            this.showDataInput();
        }, 500);
    }

    showDataInput() {
        const optionsContainer = document.getElementById('chatOptions');
        optionsContainer.innerHTML = `
            <textarea class="form-control mb-2" id="dataDevicesInput" rows="2" placeholder="List devices (HDDs, SSDs, etc.)"></textarea>
            <input type="tel" class="form-control mb-2" id="dataPhoneInput" placeholder="Contact Number">
            <button class="btn btn-primary-gradient w-100" onclick="chatbot.submitDataRequest()">
                <i class="fas fa-shield-halved me-2"></i>Request Service
            </button>
        `;
    }

    submitDataRequest() {
        const devices = document.getElementById('dataDevicesInput').value;
        const phone = document.getElementById('dataPhoneInput').value;
        
        if (devices && phone) {
            this.addMessage(`${devices} - ${phone}`, 'user');
            setTimeout(() => {
                this.addMessage('Thank you! Our data security team will contact you for scheduling. 🔒');
                setTimeout(() => {
                    this.showMainOptions();
                }, 1000);
            }, 500);
        }
    }

    talkToHumanFlow() {
        this.addMessage('Talk to a Human', 'user');
        setTimeout(() => {
            this.addMessage('Connecting you to an executive... Please wait 30–60 seconds.');
            setTimeout(() => {
                this.addMessage('For immediate assistance, please call us at +91 XXXXX XXXXX or WhatsApp us.');
                const optionsContainer = document.getElementById('chatOptions');
                optionsContainer.innerHTML = `
                    <a href="tel:+91XXXXXXXXXX" class="btn btn-primary-gradient w-100 mb-2">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                    <a href="https://wa.me/91XXXXXXXXXX" target="_blank" class="btn btn-outline-primary w-100">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp
                    </a>
                `;
            }, 2000);
        }, 500);
    }
}

// Initialize chatbot when DOM is ready
let chatbot;
document.addEventListener('DOMContentLoaded', function() {
    chatbot = new EwarddChatbot();
});
