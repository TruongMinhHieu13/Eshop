(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
    
    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });

  $( document ).ready(function() {
    /* Reader image */
function readImage(inputFile, elementPhoto) {
	if (inputFile[0].files[0]) {
		if (inputFile[0].files[0].name.match(/.(jpg|jpeg|png|gif)$/i)) {
			var size = parseInt(inputFile[0].files[0].size) / 1024;

			if (size <= 4096) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$(elementPhoto).attr('src', e.target.result);
				};
				reader.readAsDataURL(inputFile[0].files[0]);
			} else {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Dung lượng hình ảnh lớn. Dung lượng cho phép <= 4MB ~ 4096KB'
        })
				return false;
			}
		} else {
			$(elementPhoto).attr('src', '');
			Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Định dạng hình ảnh không hợp lệ !'
      })
			return false;
		}
	} else {
		$(elementPhoto).attr('src', '');
		return false;
	}
}
    /* Photo zone */
function photoZone(eDrag, iDrag, eLoad) {
	if ($(eDrag).length) {
		/* Drag over */
		$(eDrag).on('dragover', function () {
			$(this).addClass('drag-over');
			return false;
		});

		/* Drag leave */
		$(eDrag).on('dragleave', function () {
			$(this).removeClass('drag-over');
			return false;
		});

		/* Drop */
		$(eDrag).on('drop', function (e) {
			e.preventDefault();
			$(this).removeClass('drag-over');

			var lengthZone = e.originalEvent.dataTransfer.files.length;

			if (lengthZone == 1) {
				$(iDrag).prop('files', e.originalEvent.dataTransfer.files);
				readImage($(iDrag), eLoad);
			} else if (lengthZone > 1) {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Bạn chỉ được chọn 1 hình ảnh để upload'
        })
				return false;
			} else {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Dữ liệu không hợp lệ'
        })
				return false;
			}
		});

		/* File zone */
		$(iDrag).change(function () {
			readImage($(this), eLoad);
		});
	}
}
    /* PhotoZone */
    if ($('#photo-zone').length) {
      photoZone('#photo-zone', '#file-zone', '#photoUpload-preview img');
      photoZone('#photo-zone-2', '#file-zone-2', '#photoUpload-preview-2 img');
    }
  });

})(jQuery); // End of use strict
