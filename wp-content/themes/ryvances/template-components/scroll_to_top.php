<div class="scroll-to-top fixed bottom-10 right-10 z-50 opacity-0 translate-y-10 transition-all duration-300">
  <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
      <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg>
  </button>
</div>

<script>
  window.addEventListener('scroll', function() {
    const scrollTop = document.querySelector('.scroll-to-top');
    if (window.scrollY > 0) {
      scrollTop.classList.remove('opacity-0', 'translate-y-10');
      scrollTop.classList.add('opacity-100', 'translate-y-0');
    } else {
      scrollTop.classList.remove('opacity-100', 'translate-y-0');
      scrollTop.classList.add('opacity-0', 'translate-y-10');
    }
  });
</script>