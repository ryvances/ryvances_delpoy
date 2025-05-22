<a class="btn-posnawr" href="#">
  <?php echo isset($args['text']) ? $args['text'] : ''; ?>
  <span></span>
</a>

<style>
  .btn-posnawr {
    z-index: 100;
    position: relative;
    width: fit-content;
    font-size: 16px;
    font-weight: 500;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    text-decoration: none;
    color: #5227FF;
    overflow: hidden;
    text-transform: uppercase;
    border: 2px solid #5227FF;
    border-radius: 4px;
    transition: all 0.4s ease-in-out;
    cursor: pointer;
  }

  .btn-posnawr span {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-radius: 50%;
    background-color: #5227FF;
    -webkit-transition: width 0.4s ease-in-out, height 0.4s ease-in-out;
    transition: width 0.4s ease-in-out, height 0.4s ease-in-out;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    z-index: -1;
  }

  .btn-posnawr:hover {
    color: #eee;
  }

  .btn-posnawr:hover span {
    width: 225%;
    height: 562.5px;
  }

  .btn-posnawr:active {
    background-color: #5227FF;
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const btns = document.querySelectorAll('.btn-posnawr');
  
  btns.forEach(btn => {
    const span = btn.querySelector('span');

    btn.addEventListener('mouseenter', function(e) {
      const rect = btn.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      
      span.style.top = y + 'px';
      span.style.left = x + 'px';
    });

    btn.addEventListener('mouseout', function(e) {
      const rect = btn.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      
      span.style.top = y + 'px';
      span.style.left = x + 'px';
    });

    btn.addEventListener('click', function(e) {
      e.preventDefault();
    });
  });
});
</script>