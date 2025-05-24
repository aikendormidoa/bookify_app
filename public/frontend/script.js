document.addEventListener('DOMContentLoaded', function () {
  const tabs = document.querySelectorAll('.tabs .tab');
  const forms = document.querySelectorAll('#auth form');

  tabs.forEach((tab, idx) => {
    tab.addEventListener('click', function () {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      forms.forEach((form, fidx) => {
        form.style.display = (fidx === idx) ? 'flex' : 'none';
      });
    });
  });

  // Hide the second form (Register) by default
  if (forms.length > 1) {
    forms[1].style.display = 'none';
  }
});