// Custom JS
$(document).ready(function(){
    /* Bootstrap main navigation */
    $("#menu-hauptmenue li").addClass("nav-item");
    $("#menu-hauptmenue li a").addClass("nav-link");

    /* Section Accessories */
    $(".accessories_item").click(accessories_item_content);
    $(".accessoriesModalDetailBtn").click(accessories_item_content);
    function accessories_item_content(e) {
        e.preventDefault();

        // clear content of the modal
        $("#accessoriesModalTitle").text('');
        $("#accessoriesModal .modal-body").html('');

        // Make new content
        // New title
        let new_title = $(this).find(".accessories_item_title").text();
        $("#accessoriesModalTitle").text(new_title);
        // New image
        let new_img_url = $(this).find(".accessories_item_img").find("img").attr("src");
        let new_img = document.createElement("img");
        new_img.setAttribute("src", new_img_url);
        $("#accessoriesModal .modal-body").append(new_img);
        // New descriptions
        let new_description = document.createElement("div");
        new_description.setAttribute("id", "accessoriesModalDesc")
        $("#accessoriesModal .modal-body").append(new_description);
        let new_desc_content = $(this).find(".accessories_item_description").html();
        $("#accessoriesModalDesc").html(new_desc_content);
    }

    /* PW WooCommerce Gift Cards Pro */
    $("#pwgc-custom-amount").attr("placeholder", "Ihr Wunschbetrag (mindestens 25€)");

    /* Woocommerce resize product image on single product page */
    $(".wp-post-image").removeAttr("width");
    $(".wp-post-image").removeAttr("height");
    $(".wp-post-image").addClass("cbt_single_product_img");
});