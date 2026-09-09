(function() {
    const sidebar = document.querySelector('nav');
    const logo = document.querySelector('nav img');
    const selector = sidebar.dataset.darkSections || '';
    const darkSections = selector ? document.querySelectorAll(selector) : [];

    const logoNormal = '../BeV_logo_preto.png';
    const logoScrolled = '../BeV_logo_branco_incompleto.png';

    const ANTECIPACAO = 60;

    function updateSidebar() {
        const navHeight = sidebar.offsetHeight;
        const checkPoint = navHeight + ANTECIPACAO;

        let overDark = false;
        darkSections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= checkPoint && rect.bottom >= checkPoint) {
                overDark = true;
            }
        });

        if (overDark) {
            sidebar.classList.remove('scrolled');
            logo.src = logoNormal;
        } else {
            sidebar.classList.add('scrolled');
            logo.src = logoScrolled;
        }
    }

    window.addEventListener('scroll', updateSidebar);
    window.addEventListener('load', updateSidebar);
    window.addEventListener('resize', updateSidebar);
})();
