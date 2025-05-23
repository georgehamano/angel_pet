document.addEventListener('DOMContentLoaded', function () {
    const logoLink = document.querySelector('.custom-logo-link');
  
    function updateLogoOnScroll() {
      const isMobile = window.innerWidth <= 767;
      const scrollTop = window.scrollY || document.documentElement.scrollTop;
  
      if (isMobile && scrollTop > 50) {
        logoLink.classList.add('logo-scrolled');
      } else {
        logoLink.classList.remove('logo-scrolled');
      }
    }
  
    window.addEventListener('scroll', updateLogoOnScroll);
    window.addEventListener('resize', updateLogoOnScroll);
  });