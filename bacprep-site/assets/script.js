
console.log("hiiiiii");

function showLoginModal() {
    document.getElementById('loginModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function inscriptionModal() {
    document.getElementById('inscriptionModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
    document.body.style.overflow = 'auto';
}

function switchToRegister() {
    closeModal('loginModal');
    inscriptionModal();
}

function switchToLogin() {
    closeModal('inscriptionModal');
    showLoginModal();
}

// Close modal outside
document.addEventListener('click', function(event) {
    if (event.target.classList.contains('modal-info')) {
        closeModal(event.target.id);
    }
});

// Contact form 
document.querySelector('.formCONTACT').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Message envoyé §');
});

// Scroll to topp
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Show /hide scroll
window.addEventListener('scroll', function() {
    const scrollTop = document.querySelector('.scroll-top');
    if (window.pageYOffset > 250) {
        scrollTop.classList.add('show');
    } else {
        scrollTop.classList.remove('show');
    }
});