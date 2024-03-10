let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.querySelectorAll('.slide');
    
    // Ẩn tất cả các slide
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    // Tăng index và hiển thị slide tiếp theo
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = 'block';  

    // Thực hiện hiệu ứng chuyển ảnh sau 2 giây
    setTimeout(showSlides, 2000); 
}
// // Lấy chiều cao của ảnh đang chạy trong slideshow
// let slideshowHeight = document.querySelector('.slides').clientHeight;
// console.log(slideshowHeight);
// // Thiết lập chiều cao cho các ảnh trong .banner-right
// document.querySelectorAll('.img-banner-right').forEach(function(img) {
//     img.style.height = slideshowHeight / 2 + 'px'; // Chia đều chiều cao cho mỗi ảnh
// });

