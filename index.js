const slides = document.querySelectorAll('.slide');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
let currentSlide = 0;

function showSlide(index) {
    if (index < 0) {
        currentSlide = slides.length - 1;
    } else if (index >= slides.length) {
        currentSlide = 0;
    }
    
    slides.forEach((slide, i) => {
        if (i === currentSlide) {
            slide.style.display = 'block';
        } else {
            slide.style.display = 'none';
        }
    });
}

prevBtn.addEventListener('click', () => {
    currentSlide--;
    showSlide(currentSlide);
});

nextBtn.addEventListener('click', () => {
    currentSlide++;
    showSlide(currentSlide);
});

showSlide(currentSlide);

function main() {
    location.href = "main.php";
}

function index() {
    location.href = "index.php";
}

function register_page() {
    location.href = "register_page.php";
}

function local() {
    window.open('https://www.google.com/maps/@-18.1964246,-38.5285951,3a,75y,280.58h,125.49t/data=!3m8!1e1!3m6!1sAF1QipOmujCnJOac3AnuKCFWJn-BjXlCuml-seqdk9hs!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipOmujCnJOac3AnuKCFWJn-BjXlCuml-seqdk9hs%3Dw203-h100-k-no-pi-1.302976-ya44.550728-ro5.6268826-fo100!7i5376!8i2688?entry=ttu', '_blank');
}

function comm() {
    location.href = "comm.php";
}

function pizza1() {
    location.href = "biesiadna.php";
}

function pizza2() {
    location.href = "pepperoni.php";
}

function pizza3() {
    location.href = "margherita.php";
}

function pizza4() {
    location.href = "capricciosa.php";
}

function pizza5() {
    location.href = "diavola.php";
}

function pizza6() {
    location.href = "yours.php";
}

function buy() {
    location.href = "buy.php";
}

function employee_panel() {
    location.href = "employee_panel.php";
}