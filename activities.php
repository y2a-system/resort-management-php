
<style>
/* ===============================
   Title Bar
================================ */
.activities-title {
    padding: 1.5rem;
    max-width: 1200px;
    margin: 1rem auto;
    text-align: center;
}

.activities-title h1 span {
    color: var(--primary-blue, #007BFF);
}

/* ===============================
   Activities Grid
================================ */
.activities-grid {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem 5rem;
}

.row {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
    gap: 2rem;
}

/* ===============================
   Activity Card
================================ */
.activity-card {
    position: relative;
    display: flex;
    flex-direction: column;
    height: 100%;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.activity-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.activity-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, gold, teal);
}

/* Image */
.card-image-container {
    position: relative;
    height: 240px;
    overflow: hidden;
}

.card-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s ease;
}

.activity-card:hover .card-image {
    transform: scale(1.08);
}

/* Badge */
.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 1rem;
}

.activity-category {
    background: rgba(255, 255, 255, 0.95);
    padding: 0.4rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    color: #007BFF;
}

/* Content */
.card-content {
    padding: 2rem;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.activity-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: #333;
}

.activity-duration {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
    color: #777;
    margin-bottom: 1rem;
}

.activity-description {
    color: #555;
    line-height: 1.6;
    flex-grow: 1;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Footer */
.card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
    padding-top: 1.5rem;
    border-top: 1px solid #eee;
}

.activity-price {
    font-size: 1.3rem;
    font-weight: 700;
    color: #007BFF;
}

.activity-price span {
    font-size: 0.9rem;
    font-weight: 400;
    color: #777;
}

.card-action {
    background: #007BFF;
    color: #fff;
    border: none;
    padding: 0.7rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.card-action:hover {
    background: #0056b3;
}

/* Loading animation */
.activity-card.loading {
    animation: pulse 1.5s infinite;
}
@keyframes pulse {
    50% { opacity: 0.7; }
}

/* Responsive */
@media (max-width: 992px) {
    .row { grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); }
}
@media (max-width: 768px) {
    .row { grid-template-columns: 1fr; }
    .card-image-container { height: 200px; }
    .card-content { padding: 1.5rem; }
}
</style>


<!-- Title -->
<section class="activities-title">
    <h1>Resort <span>Experiences</span></h1>
</section>

<!-- Activities Grid -->
<section class="activities-grid">
    <div class="row" id="activity-list">
        <?php
        $activities = $conn->query("SELECT * FROM activity_list WHERE delete_flag=0 AND status=1 ORDER BY name ASC");
        while($row = $activities->fetch_assoc()):
            $description = strip_tags(html_entity_decode($row['description']));
            $category = "Adventure";  // Keep badge
            $price = "120";           // Example placeholder
            $duration = "2-3 hours";  // Example placeholder
        ?>
        <div class="col" data-category="<?= strtolower($category) ?>">
            <div class="activity-card" data-id="<?= $row['id'] ?>">
                <div class="card-image-container">
                    <img src="<?= validate_image($row['image_path']) ?>" class="card-image" alt="<?= $row['name'] ?>">
                    <div class="card-overlay">
                        <span class="activity-category"><?= $category ?></span>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="activity-title"><?= $row['name'] ?></h3>
                    <div class="activity-duration"><i class="far fa-clock"></i> <?= $duration ?></div>
                    <p class="activity-description"><?= $description ?></p>
                    <div class="card-footer">
                        <div class="activity-price">$<?= $price ?> <span>per person</span></div>
                        <button class="card-action view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function () {

    function showActivityDetails(id) {
        const card = $(`.activity-card[data-id="${id}"]`);
        card.addClass('loading');

        uni_modal(
            'Activity Details',
            'view_activity.php?id=' + id,
            'mid-large',
            'premium-modal'
        );

        setTimeout(() => card.removeClass('loading'), 500);
    }

    $('.activity-card').on('click', function (e) {
        if ($(e.target).closest('.card-action').length) return;
        showActivityDetails($(this).data('id'));
    });

    $('.card-action').on('click', function (e) {
        e.stopPropagation();
        showActivityDetails($(this).closest('.activity-card').data('id'));
    });
});
</script>