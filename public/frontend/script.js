document.addEventListener('DOMContentLoaded', function () {
  // Tabs for login/register
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

  // Payment option selection
  const paymentOptions = document.querySelectorAll('.payment-option');
  paymentOptions.forEach(option => {
    option.addEventListener('click', () => {
      paymentOptions.forEach(opt => opt.classList.remove('selected'));
      option.classList.add('selected');
    });
  });
});

function showAdminTab(tab) {
  document.getElementById('admin-events').style.display = (tab === 'events') ? 'block' : 'none';
  document.getElementById('admin-bookings').style.display = (tab === 'bookings') ? 'block' : 'none';
  document.getElementById('admin-users').style.display = (tab === 'users') ? 'block' : 'none';
  var tabs = document.querySelectorAll('.admin-tab');
  tabs.forEach(function(btn) { btn.classList.remove('active'); btn.style.background='#f0f0f0'; btn.style.color='#888'; });
  if(tab === 'events') { tabs[0].classList.add('active'); tabs[0].style.background='#eaf1fb'; tabs[0].style.color='#4a90e2'; }
  if(tab === 'bookings') { tabs[1].classList.add('active'); tabs[1].style.background='#eaf1fb'; tabs[1].style.color='#4a90e2'; }
  if(tab === 'users') { tabs[2].classList.add('active'); tabs[2].style.background='#eaf1fb'; tabs[2].style.color='#4a90e2'; }
}