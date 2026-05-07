<?php $pageTitle="Lessons & Programs"; include 'includes/header.php'; include 'includes/navigation.php'; include 'includes/lesson-data.php'; ?>

<section class="page-banner">
    <div class="container">
        <h1>Lessons & Programs</h1>
        <p>Flexible learning paths designed for beginners through advanced performers.</p>
    </div>
</section>

<section class="section">
    <div class="container">

        <div class="card-grid">

            <div class="card">

                <div class="card-image">
                    <img 
                        src="images/Guitar Lesson.jpg" 
                        alt="Student learning guitar during a private music lesson"
                    >
                </div>

                <div class="card-content">
                    <h3>Guitar Lessons</h3>
                    <p>Learn chords, scales, improvisation, and live performance techniques.</p>
                    <p><strong>Skill Level:</strong> Beginner to Advanced</p>
                    <p><strong>Equipment:</strong> Acoustic or electric guitar</p>
                </div>

            </div>

            <div class="card">

                <div class="card-image">
                    <img 
                        src="images/Piano Lesson.jpg" 
                        alt="Student practicing piano with an instructor at EchoSound Music School"
                    >
                </div>

                <div class="card-content">
                    <h3>Piano Lessons</h3>
                    <p>Build music theory knowledge and performance confidence with guided practice.</p>
                    <p><strong>Skill Level:</strong> Beginner to Intermediate</p>
                    <p><strong>Equipment:</strong> Keyboard or piano</p>
                </div>

            </div>

            <div class="card">

                <div class="card-image">
                    <img 
                        src="images/Drum Lesson.jpg" 
                        alt="Drummer practicing rhythm exercises during a drum lesson"
                    >
                </div>

                <div class="card-content">
                    <h3>Drum Programs</h3>
                    <p>Master rhythm fundamentals, coordination, and groove development.</p>
                    <p><strong>Skill Level:</strong> All levels</p>
                    <p><strong>Equipment:</strong> Drum sticks recommended</p>
                </div>

            </div>

        </div>

        <div class="table-wrapper">

            <h2 style="margin-top:4rem;">Weekly Schedule</h2>

            <table>
                <tr>
                    <th>Day</th>
                    <th>Programs</th>
                </tr>

                <?php foreach($weeklySchedule as $day => $classes): ?>
                <tr>
                    <td><?php echo $day; ?></td>
                    <td><?php echo implode(", ", $classes); ?></td>
                </tr>
                <?php endforeach; ?>

            </table>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>