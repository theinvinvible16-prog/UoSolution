/**
 * Uo Travel Solutions - Main Interactivity JavaScript
 * Domain: uotravelsolutions.com
 */

document.addEventListener('DOMContentLoaded', function () {
    
    // 1. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mainNav = document.getElementById('mainNav');

    if (mobileMenuBtn && mainNav) {
        mobileMenuBtn.addEventListener('click', function () {
            mainNav.classList.toggle('active');
            const icon = mobileMenuBtn.querySelector('i');
            if (icon) {
                if (mainNav.classList.contains('active')) {
                    icon.className = 'fa-solid fa-xmark';
                } else {
                    icon.className = 'fa-solid fa-bars';
                }
            }
        });
    }

    // 2. Search Widget Tabs (Train / Bus / Package)
    const tabBtns = document.querySelectorAll('.search-tab-btn');
    const formServiceType = document.getElementById('search_service_type');
    const searchForm = document.getElementById('heroSearchForm');

    if (tabBtns.length > 0) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                tabBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const tabType = this.getAttribute('data-tab');
                if (formServiceType) {
                    formServiceType.value = tabType;
                }

                // Dynamically update placeholder hints
                const originInput = document.getElementById('search_origin');
                const destInput = document.getElementById('search_destination');
                
                if (tabType === 'Train') {
                    if (originInput) originInput.placeholder = 'e.g. Zurich HB / NYC Penn Station';
                    if (destInput) destInput.placeholder = 'e.g. Zermatt / Washington Union';
                } else if (tabType === 'Bus') {
                    if (originInput) originInput.placeholder = 'e.g. Las Vegas Strip Terminal';
                    if (destInput) destInput.placeholder = 'e.g. Grand Canyon South Rim';
                } else {
                    if (originInput) originInput.placeholder = 'e.g. Worldwide / Europe';
                    if (destInput) destInput.placeholder = 'e.g. Swiss Alps / Japan Odyssey';
                }
            });
        });
    }

    // 3. Modal Inquiry Popup Handler
    const inquiryModal = document.getElementById('inquiryModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const modalInquiryType = document.getElementById('modalInquiryType');
    const modalServiceSelect = document.getElementById('modal_service');
    const openModalTriggers = document.querySelectorAll('.open-quote-modal');

    function openModal(serviceName, customType) {
        if (inquiryModal) {
            if (modalInquiryType && customType) {
                modalInquiryType.value = customType;
            }
            if (modalServiceSelect && serviceName) {
                modalServiceSelect.value = serviceName;
            }
            inquiryModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal() {
        if (inquiryModal) {
            inquiryModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }

    if (openModalTriggers.length > 0) {
        openModalTriggers.forEach(trigger => {
            trigger.addEventListener('click', function (e) {
                e.preventDefault();
                const service = this.getAttribute('data-service') || 'Train Reservation';
                const type = this.getAttribute('data-type') || 'Fare Quote Request';
                openModal(service, type);
            });
        });
    }

    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', closeModal);
    }

    if (inquiryModal) {
        inquiryModal.addEventListener('click', function (e) {
            if (e.target === inquiryModal) {
                closeModal();
            }
        });
    }

    // 4. Accordion Toggle Logic (Package Itinerary & FAQ)
    const accordionHeaders = document.querySelectorAll('.accordion-header');

    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach(header => {
            header.addEventListener('click', function () {
                const item = this.parentElement;
                const content = item.querySelector('.accordion-content');
                const isOpen = item.classList.contains('active');

                // Close other items in same accordion container
                const parentAccordion = item.parentElement;
                if (parentAccordion) {
                    const siblingItems = parentAccordion.querySelectorAll('.accordion-item');
                    siblingItems.forEach(sib => {
                        sib.classList.remove('active');
                        const sibContent = sib.querySelector('.accordion-content');
                        if (sibContent) sibContent.style.maxHeight = null;
                    });
                }

                if (!isOpen) {
                    item.classList.add('active');
                    if (content) {
                        content.style.maxHeight = content.scrollHeight + 'px';
                    }
                }
            });
        });

        // Open first accordion item by default if present
        const firstHeader = accordionHeaders[0];
        if (firstHeader) {
            firstHeader.click();
        }
    }

    // 5. Package Catalog Filter Buttons (on packages.php)
    const filterBtns = document.querySelectorAll('.filter-btn');
    const packageCards = document.querySelectorAll('.package-card-item');

    if (filterBtns.length > 0 && packageCards.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                packageCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // 6. Automatic Disclaimer Toast Popup (Triggered 2 seconds after website launch)
    const autoDisclaimerModal = document.getElementById('autoDisclaimerModal');
    const closeDisclaimerBtn = document.getElementById('closeDisclaimerBtn');
    const acceptDisclaimerBtn = document.getElementById('acceptDisclaimerBtn');

    if (autoDisclaimerModal) {
        setTimeout(function () {
            autoDisclaimerModal.classList.add('active');
        }, 2000);

        function dismissDisclaimer() {
            autoDisclaimerModal.classList.remove('active');
        }

        if (closeDisclaimerBtn) closeDisclaimerBtn.addEventListener('click', dismissDisclaimer);
        if (acceptDisclaimerBtn) acceptDisclaimerBtn.addEventListener('click', dismissDisclaimer);
    }
});
