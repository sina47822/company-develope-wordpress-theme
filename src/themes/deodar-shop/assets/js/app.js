document.addEventListener('DOMContentLoaded', function () {
    let mediaUploader;

    // Handle the "Select Image" button click
    const uploadButton = document.getElementById('upload-category-image');
    if (uploadButton) {
        uploadButton.addEventListener('click', function (e) {
            e.preventDefault();

            // If the media uploader already exists, open it
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }

            // Create a new media uploader instance
            mediaUploader = wp.media({
                title: 'Choose Category Image',
                button: {
                    text: 'Choose Image',
                },
                multiple: false, // Only allow one image
            });

            // When an image is selected, update the input field and display the preview
            mediaUploader.on('select', function () {
                const attachment = mediaUploader.state().get('selection').first().toJSON();
                const imageWrapper = document.getElementById('category-image-wrapper');
                const imageInput = document.getElementById('category_image');

                if (imageWrapper) {
                    imageWrapper.innerHTML = `<img src="${attachment.url}" alt="" style="max-width: 150px; max-height: 150px;">`;
                }

                if (imageInput) {
                    imageInput.value = attachment.id; // Save the attachment ID in the hidden input
                }
            });

            mediaUploader.open();
        });
    }

    // Handle the "Remove Image" button click
    const removeButton = document.getElementById('remove-category-image');
    if (removeButton) {
        removeButton.addEventListener('click', function (e) {
            e.preventDefault();

            const imageWrapper = document.getElementById('category-image-wrapper');
            const imageInput = document.getElementById('category_image');

            if (imageWrapper) {
                imageWrapper.innerHTML = ''; // Remove the preview image
            }

            if (imageInput) {
                imageInput.value = ''; // Clear the image ID
            }
        });
    }
});


