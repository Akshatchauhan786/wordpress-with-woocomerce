<?php /* Template Name: Catalog */
get_header(); ?>

<div class="container text-center" style="margin-top: 25px;">
    <h1 class="catalog-heading">CATALOGS</h1>
</div>

<div class="container" style="padding: 20px;">
  <div class="pdf-catalog">
	  <?php if( have_rows('catalog') ):
      while ( have_rows('catalog') ) : the_row(); ?>
    <div class="pdf-item" data-pdf-url="<?php the_sub_field('pdflink'); ?>">
      <img src="<?php the_sub_field('catalog_thumbnail'); ?>" class="pdf-thumbnail" />
      <span class="pdf-title"><?php the_sub_field('catalog_name'); ?></span>
    </div>
 <?php  endwhile; else : endif;?>

  </div>
</div>

<!-- Modal Structure -->
<div id="pdfModal" class="modal catalog_popup">
  <div class="modal-content">
    <span class="close" data-dismiss="modal">&times;</span>
    <img id="pdfThumbnail" src="" alt="PDF Thumbnail" width="100%" height="400px" /> 
    <?php echo do_shortcode('[contact-form-7 id="88bb5d2" title="Catalog Form"]'); ?>
  </div>
</div>

<style>
/* Container Style */
.container {
  padding: 20px;
}

/* Heading Style */
.catalog-heading {
  font-family: 'Roboto', sans-serif;
  font-size: 36px;
  color: #333;
  margin-bottom: 20px;
}

/* PDF Catalog Style */
.pdf-catalog {
  display: flex; /* Flex layout */
  flex-wrap: wrap; /* Allow wrapping */
  justify-content: space-between; /* Spread items evenly */
  gap: 20px; /* Add space between items */
}

	#pdfThumbnail {
    display: none;
}
	.catalog_popup form {
    margin-top: 29px;
}


.catalog_popup .wpcf7-submit {
    background: #028374;
    color: #fff!important;
}

.catalog_popup .wpcf7-submit:hover {
    background: #000;
}
/* PDF Item Style */
.pdf-item {
  width: 30%; /* Approx. 3 items per row */
  border: 1px solid #e0e0e0; /* Light border */
  border-radius: 10px; /* Rounded corners */
  background-color: #f8f8f8; /* Light background */
  transition: all 0.3s ease; /* Smooth transitions */
  overflow: hidden; /* Prevent content overflow */
  cursor: pointer; /* Pointer cursor on hover */
}

/* Thumbnail Style */
.pdf-thumbnail {
  width: 100%; /* Full width */
  height: 300px; /* Consistent height */
  object-fit: cover; /* Maintain aspect ratio */
  border-radius: 10px; /* Rounded corners */
}

/* PDF Title Style */
.pdf-title {
  display: block; /* Separate text from image */
  font-size: 16px; /* Larger font */
  color: #333; /* Dark text */
  text-align: center; /* Centered text */
  padding: 10px; /* Padding for text */
}

/* Hover Effect */
.pdf-item:hover {
  transform: scale(1.05); /* Slight scale on hover */
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15); /* Add shadow on hover */
}

/* Modal Styles */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
  padding-top: 60px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto;
  padding: 30px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.catalog_popup .modal-content {
    width: 550px;
    position: relative;
	top: 67px;
}
	.catalog_popup br {
    display: none;
}
	@media(max-width:991px){
	.catalog_popup .modal-content {
    width: 100%;
}
	}
.catalog_popup .modal-content .close {
    background: #028374;
    text-align: center;
    line-height: 1;
    color: #fff;
    border-radius: 50%;
    width: 47px;
    height: 47px;
    padding: 8px 0px 0 0;
    justify-content: center;
    text-align: center;
    position: absolute;
    right: 18px;
    top: 5%;
}
.catalog_popup input {
    outline: none;
    box-shadow: none!important;
    border: 1px solid #028374;
}

.catalog_popup input:focus {
    border: 1px solid #028374;
}
.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-control {
  width: 100%;
  padding: 8px;
  box-sizing: border-box;
}

.btn-primary {
  background-color: #007bff;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.pdflink {
    opacity: 0.5; /* Reduce opacity to visually indicate disabled state */
    pointer-events: none; /* Disable pointer events to prevent clicking */
	display:none;
  }

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
  $(".close").click(function(){
    // Hide the modal
    $("#pdfModal").hide();
    // Reset the form data
    $("#pdfModal form")[0].reset();
  });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var modal = document.getElementById("pdfModal");
  var pdfThumbnail = document.getElementById("pdfThumbnail");
  var closeModal = document.querySelector(".close"); // Use querySelector to select the close button
  var pdfUrlInput = document.getElementById('pdfUrl');
  var contactForm = modal.querySelector('form');

  document.querySelectorAll('.pdf-item').forEach(function(item) {
    item.addEventListener('click', function() {
      var pdfUrl = item.getAttribute('data-pdf-url');
      var thumbnailUrl = item.getAttribute('data-thumbnail-url');
      pdfThumbnail.setAttribute('src', thumbnailUrl);
      pdfUrlInput.value = pdfUrl; // Set the hidden input value
      modal.style.display = "block";
    });
  });

  closeModal.onclick = function() {
    modal.style.display = "none";
    pdfThumbnail.setAttribute('src', '');
    resetForm();
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
      pdfThumbnail.setAttribute('src', '');
      resetForm();
    }
  }

  // Close modal on form submission
  document.addEventListener('wpcf7mailsent', function(event) {
    if (event.detail.contactFormId == '88bb5d2') {
      modal.style.display = "none";
      pdfThumbnail.setAttribute('src', '');
      resetForm();
    }
  }, false);

  function resetForm() {
    contactForm.reset(); // Reset the form fields
    // Reset any custom validation messages or styles if necessary
    var inputs = contactForm.querySelectorAll('input, textarea');
    inputs.forEach(function(input) {
      input.classList.remove('wpcf7-not-valid');
    });
  }
});
</script>






<?php get_footer(); ?>
