<div class="sidebar">
    <!-- <div class="side-header">
        <h3>M<span>odern</span></h3>
    </div> -->
    <div class="side-content">
        <div class="profile">
            <a href="index.php" class="profile-img bg-img" style="border:4px solid #ffffff;background-size:contain !important;background-image: url('image/logo.png');"></a>
            
            <h4>Admin</h4>
            
            <small>Furniture</small>
        </div>
        <div class="side-menu">
            <ul>
                <li>
                    <a href="index.php" class="active">
                        <span class="las la-home"></span>
                        <small>Dashboard</small>
                    </a>
                </li>
                <li>
                    <a href="product_list.php">
                        <span class="las la-store-alt"></span>
                        <small>Products</small>
                    </a>
                </li>
                <li>
                    <a href="order_list.php">
                        <span class="las la-cog"></span>
                        <small>Orders</small>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        const tags = document.querySelectorAll(".side-menu ul li a");

        // Load the active link from local storage
        const activeLink = localStorage.getItem('activeLink');
        if (activeLink) {
            tags.forEach(tag => {
                if (tag.href === activeLink) {
                    tag.classList.add('active');
                } else {
                    tag.classList.remove('active');
                }
            });
        }

        // Restore scroll position
        const scrollPosition = localStorage.getItem('scrollPosition');
        if (scrollPosition) {
            document.querySelector('.side-content').scrollTop = scrollPosition;
        }

        tags.forEach(tag => {
            tag.addEventListener('click', function() {
                // Remove active class from all links
                tags.forEach(ta => ta.classList.remove('active'));

                // Add active class to the clicked link
                this.classList.add('active');

                // Save the active link to local storage
                localStorage.setItem('activeLink', this.href);

                // Save scroll position to local storage
                localStorage.setItem('scrollPosition', document.querySelector('.side-content').scrollTop);
            });
        });

        // Save scroll position before unloading the page
        window.addEventListener('beforeunload', () => {
            localStorage.setItem('scrollPosition', document.querySelector('.side-content').scrollTop);
        });
    });
</script>

