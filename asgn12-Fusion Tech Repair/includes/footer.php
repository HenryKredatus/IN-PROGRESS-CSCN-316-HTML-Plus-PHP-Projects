<footer>
<?php
$quotes = [
    "Technology is best when it brings people together.",
    "Fix the problem, not just the symptom.",
    "Great service is built on trust and consistency.",
    "Innovation distinguishes between a leader and a follower.",
    "Quality means doing it right when no one is looking.",
    "Every problem has a solution—sometimes it just needs a technician.",
    "Your devices deserve a second life.",
    "Small fixes can make a big difference."
];

// Pick a random quote
$quote = $quotes[array_rand($quotes)];
?>

    <p><strong>Fusion Tech Repair</strong></p>
    <p>Email: contact@fusiontech.com | Phone: (555) 123-4567</p>
    
    <p class="quote">"<?php echo $quote; ?>"</p>
    
    <p>&copy; 2026 Fusion Tech Repair</p>
</footer>