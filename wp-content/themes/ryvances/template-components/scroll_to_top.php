<div class="scroll-to-top fixed bottom-40 right-0 z-50 opacity-0 translate-x-10 transition-all duration-300 bg-red-500 shadow-lg rounded-l-full flex items-center justify-center hover:bg-red-600 cursor-pointer">
  <button class="p-2 scroll-button" onclick="scrollToTop()">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 lg:size-8 text-white">
      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
    </svg>
  </button>
</div>
<script>
function scrollToTop() {
  const scrollTop = document.querySelector('.scroll-to-top');
  scrollTop.classList.remove('opacity-100', 'translate-x-0');
  scrollTop.classList.add('opacity-0', 'translate-x-10');
    
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

let lastScrollY = window.scrollY;
window.addEventListener('scroll', function() {
  let currentScrollY = window.scrollY;
  const scrollTop = document.querySelector('.scroll-to-top');

  if (currentScrollY > 0 && currentScrollY > lastScrollY) {
    scrollTop.classList.remove('opacity-0', 'translate-x-10');
    scrollTop.classList.add('opacity-100', 'translate-x-0');
  } else if (currentScrollY <= 0) {
    scrollTop.classList.remove('opacity-100', 'translate-x-0');
    scrollTop.classList.add('opacity-0', 'translate-x-10');
  }
  lastScrollY = currentScrollY;
});
</script>