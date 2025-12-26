const toggleMenu = () => {
    const mobileMenu = document.getElementById('mobile-menu');
    if (
        mobileMenu.style.maxHeight == '0px'
    ) {
        mobileMenu.style.maxHeight = '1000px';
        mobileMenu.style.paddingTop = '20px';
    }
    else {
        mobileMenu.style.maxHeight = '0px'
        mobileMenu.style.paddingTop = '0';
    }
}

const onLoad = () => {
    const locationArr = window.location.pathname.split('/');
    const pathname = locationArr[locationArr.length - 1].replace('.html', '')
    const navLinks = ['index', 'about', 'careers', 'contact', 'newsroom', 'products', 'projects', 'sustainability']
    let currentLocation = '';
    navLinks.map((link) => { if (link === pathname) { currentLocation = link } })
    const desktopLinkStyle = document.getElementById(`${currentLocation}-nav-link`).style;
    const mobileLinkStyle = document.getElementById(`${currentLocation}-mobile-link`).style;
    desktopLinkStyle.backgroundColor = '#023359'
    desktopLinkStyle.color = 'white'
    mobileLinkStyle.backgroundColor = '#023359'
    mobileLinkStyle.color = 'white'
}