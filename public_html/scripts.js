document.addEventListener('DOMContentLoaded', function() {
    const shareLinks = document.querySelectorAll('.share-link');

    shareLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const platform = this.getAttribute('data-platform');
            const url = window.location.href;
            let shareUrl = '';

            switch(platform) {
                case 'twitter':
                    shareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent('こんにちは、すじこバニラおにぎり')}`;
                    break;
                case 'instagram':
                    shareUrl = `https://www.instagram.com/?url=${encodeURIComponent(url)}`;
                    break;
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
                    break;
                case 'line':
                    shareUrl = `https://line.me/R/msg/text/?${encodeURIComponent('こんにちは、すじこバニラおにぎり' + url)}`;
                    break;
            }

            window.open(shareUrl, '_blank');
        });
    });
});

