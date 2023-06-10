const body = document.querySelector('body');

body.addEventListener('mousemove', (e) => {
  const { clientX, clientY, innerWidth, innerHeight } = e;
  const percentX = (clientX / innerWidth) * 100;
  const percentY = (clientY / innerHeight) * 100;
  
  body.style.setProperty('--bg-position-x', `${percentX}%`);
  body.style.setProperty('--bg-position-y', `${percentY}%`);

  const content = document.querySelector('.content');
  const isMouseOverContent = content.contains(e.target);

  if (isMouseOverContent) {
    body.classList.add('blur-effect');
  } else {
    body.classList.remove('blur-effect');
  }
});