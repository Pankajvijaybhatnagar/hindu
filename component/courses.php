<?php
$courses = [
    [
        'title' => 'Mathematics',
        'description' => 'Advanced Mathematics for Secondary Students',
        'image' => 'assets/images/all-img/c1.png',
        'lessons' => '12 Lessons',
        'duration' => '10h 30m',
        'rating' => '4.9',
        'seats' => '50 Seats Available',
        'slug' => 'mathematics'
    ],
    [
        'title' => 'Science',
        'description' => 'Fundamentals of Physics, Chemistry, and Biology',
        'image' => 'assets/images/all-img/c1.png',
        'lessons' => '15 Lessons',
        'duration' => '12h 15m',
        'rating' => '4.8',
        'seats' => '45 Seats Available',
        'slug' => 'science'
    ],
    [
        'title' => 'English Language',
        'description' => 'Mastering Grammar and Composition Skills',
        'image' => 'assets/images/all-img/c1.png',
        'lessons' => '10 Lessons',
        'duration' => '8h 30m',
        'rating' => '4.9',
        'seats' => '40 Seats Available',
        'slug' => 'english-language'
    ],
    [
        'title' => 'History & Civics',
        'description' => 'Indian History and Modern Civic Studies',
        'image' => 'assets/images/all-img/c1.png',
        'lessons' => '8 Lessons',
        'duration' => '6h 45m',
        'rating' => '4.7',
        'seats' => '35 Seats Available',
        'slug' => 'history-civics'
    ],
    [
        'title' => 'Computer Science',
        'description' => 'Introduction to Programming and Web Development',
        'image' => 'assets/images/all-img/c1.png',
        'lessons' => '10 Lessons',
        'duration' => '9h 20m',
        'rating' => '4.9',
        'seats' => '50 Seats Available',
        'slug' => 'computer-science'
    ],
    [
        'title' => 'Geography',
        'description' => 'World Geography and Environmental Studies',
        'image' => 'assets/images/all-img/c1.png',
        'lessons' => '7 Lessons',
        'duration' => '5h 50m',
        'rating' => '4.8',
        'seats' => '38 Seats Available',
        'slug' => 'geography'
    ]
];
?>

<div class="best-course section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Popular Courses</h2>
            <p>Explore Our <span><u>Top Programs</u></span></p>
        </div>
        <div class="row">
            <?php foreach ($courses as $course): ?>
            <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                data-wow-offset="0">
                <div class="course-slide">
                    <div class="course-img">
                        <img src="<?= $course['image']; ?>" alt="<?= $course['title']; ?> Course">
                    </div>
                    <div class="course-content">
                        <a class="c_btn"
                            href="single_course.php?slug=<?= $course['slug']; ?>"><?= $course['title']; ?></a>
                        <h3><a href="single_course.php?slug=<?= $course['slug']; ?>"><?= $course['description']; ?></a>
                        </h3>
                        <span><i class="fa fa-calendar"></i><?= $course['lessons']; ?></span>
                        <span><i class="fa fa-clock-o"></i><?= $course['duration']; ?></span>
                        <span><i class="fa fa-star"></i><?= $course['rating']; ?></span>
                        <span><i class="fa fa-table"></i><strong><?= $course['seats']; ?></strong></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!--END COL -->

            <div class="col-lg-12 text-center">
                <div class="cc_btn">
                    <a class="btn_one" href="course.html">View All Courses</a>
                </div>
            </div>
            <!--END COL -->
        </div>
        <!--END ROW -->
    </div>
    <!--END CONTAINER -->
</div>