<?php
get_header();?>

<div class="container text-center mt-4">
	<h1>Our Products </h1>
	</div>





<?php
// Retrieve the term ID for the "Uncategorized" category by its slug
$uncategorized_slug = 'uncategorized'; // Default slug for "Uncategorized"
$uncategorized_category = get_term_by('slug', $uncategorized_slug, 'product_cat');

$exclude_id = array(); // Initialize exclusion array

// Exclude "Uncategorized" category if it exists
if ($uncategorized_category) {
    $exclude_id[] = $uncategorized_category->term_id;
}

// Retrieve WooCommerce product categories excluding "Uncategorized"
$product_categories = get_terms(array(
    'taxonomy' => 'product_cat', 
    'hide_empty' => false, 
    'exclude' => $exclude_id,  
));

if (!empty($product_categories)) {
    echo '<div class="product-categories-container">';  // Start a flexbox container

    foreach ($product_categories as $category) {
        $category_link = get_term_link($category);
        $category_name = esc_html($category->name);

        // Get the category thumbnail
        $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
        $thumbnail_url = wp_get_attachment_url($thumbnail_id);

        echo '<div class="product-category-box">'; // Start a category box
        echo '<a href="' . esc_url($category_link) . '">';  // Category link

        // Display the category image with shadow and responsive behavior
        if ($thumbnail_url) {
            echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr($category_name) . ' Image">';
        } else {
            echo '<img src="default-image-path.jpg" alt="Default Image">';  // Placeholder image
        }

        echo '<h2>' . $category_name . '</h2>';  // Category name
        echo '</a>';
        echo '</div>'; // End category box
    }

    echo '</div>';  // End flexbox container
} else {
    echo '<p>No product categories found.</p>';
}
?>
<?php
get_footer();
?>
