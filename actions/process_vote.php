<?php
session_start();

// Initialize vote counters and votes in the session if not already set
if (!isset($_SESSION['votes'])) {
    $_SESSION['votes'] = array(
        'president' => array('candidates' => array(), 'counter' => array()),
        'vice_president' => array('candidates' => array(), 'counter' => array()),
        'secretary' => array('candidates' => array(), 'counter' => array()),
        'treasurer' => array('candidates' => array(), 'counter' => array()),
        'auditor' => array('candidates' => array(), 'counter' => array()),
        'accountant' => array('candidates' => array(), 'counter' => array())
    );
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the selected choices from the form
    $president = isset($_POST['president']) ? $_POST['president'] : 'No choice';
    $vicePresident = isset($_POST['vice_president']) ? $_POST['vice_president'] : 'No choice';
    $secretary = isset($_POST['secretary']) ? $_POST['secretary'] : 'No choice';
    $treasurer = isset($_POST['treasurer']) ? $_POST['treasurer'] : 'No choice';
    $auditor = isset($_POST['auditor']) ? $_POST['auditor'] : 'No choice';
    $accountant = isset($_POST['accountant']) ? $_POST['accountant'] : 'No choice';

    // Update vote counters and votes
    updateVoteCounters('president', $president);
    updateVoteCounters('vice_president', $vicePresident);
    updateVoteCounters('secretary', $secretary);
    updateVoteCounters('treasurer', $treasurer);
    updateVoteCounters('auditor', $auditor);
    updateVoteCounters('accountant', $accountant);

    // Redirect to the thank you page with selected choices as URL parameters
    header("Location: ../pages/thankyou.php?president=$president&vicePresident=$vicePresident&secretary=$secretary&treasurer=$treasurer&auditor=$auditor&accountant=$accountant");
    exit;
}

function updateVoteCounters($position, $candidate)
{
    // Update vote counters and votes for the given position and candidate
    if (!in_array($candidate, $_SESSION['votes'][$position]['candidates'])) {
        $_SESSION['votes'][$position]['candidates'][] = $candidate;
        $_SESSION['votes'][$position]['counter'][$candidate] = 1;
    } else {
        $_SESSION['votes'][$position]['counter'][$candidate]++;
    }
}
