<?php
include_once 'partials/header.php';

$currentValue = 0;

$input = '';
$process = '';
$note = '';

function shuntingYard($expression) {
    $output = '';
    $stack = [];

    $precedence = [
        '+' => 1,
        '-' => 1,
        '*' => 2,
        '/' => 2,
    ];

    $tokens = preg_split('/(\+|-|\*|\/)/', $expression, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            $output .= $token . ' ';
        } else {
            while (!empty($stack) && $precedence[end($stack)] >= $precedence[$token]) {
                $output .= array_pop($stack) . ' ';
            }
            $stack[] = $token;
        }
    }
    while (!empty($stack)) {
        $output .= array_pop($stack) . ' ';
    }
    return trim($output);
}
function evaluatePostfix($expression) {
    $stack = [];

    $tokens = explode(' ', $expression);

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            $stack[] = $token;
        } else {
            $operand2 = array_pop($stack);
            $operand1 = array_pop($stack);

            switch ($token) {
                case '+':
                    $stack[] = $operand1 + $operand2;
                    break;
                case '-':
                    $stack[] = $operand1 - $operand2;
                    break;
                case '*':
                    $stack[] = $operand1 * $operand2;
                    break;
                case '/':
                    $stack[] = $operand1 / $operand2;
                    break;
            }
        }
    }

    return end($stack);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['input'])) {
        $input = $_POST['input'];
    }

    if (isset($_POST)) {
        foreach ($_POST as $key => $value) {
            if ($key == 'equal') {
                $postfix = shuntingYard($input);
                $process = $input;
                $currentValue = evaluatePostfix($postfix);
                $input = strval($currentValue);
                $note .= "$process = $input\n";
            } elseif ($key == "ce") {
                $input = '';
                $process = '';
            } elseif ($key == "back") {
                //echo "Before back - Input: $input, Process: $process<br>";
                if (!empty($input)) {
                    $input = substr($input, 0, -1);
                    $process = substr($input, 0, strlen($input)); // Update process to match input
                }
                //echo "After back - Input: $input, Process: $process<br>";
            } elseif ($key != 'input') {
                $input .= $value;
                $process = $input; // Update the process to match the input
            }
        }
    }
    // Write note to file
    file_put_contents('notes.txt', $note, FILE_APPEND);
}
?>

<main class="calculator">
    <div class="section calculator">
        <h1>Kalkulačka</h1>

        <div class="process-window">
            <input type="text" id="process-display" value="<?php echo htmlspecialchars($process); ?>" disabled>
        </div>

        <form method="post">
            <input class="result" type="hidden" name="input" value="<?php echo htmlspecialchars($input); ?>">

            
            <input type="text" id="display" value="<?php echo $currentValue; ?>" disabled>
            <table class="calc">
                <tr class="row">
                    <td class="symbol"><input type="submit" name="ce" value="CE"></td>
                    <td class="symbol"><input type="submit" name="back" value="back"></td>
                    <td class="symbol"><input type="submit" name="divide" value=" "></td>
                    <td class="symbol"><input type="submit" name="divide" value="/"></td>
                </tr>
                <tr class="row">
                    <td class="symbol"><input type="submit" name="7" value="7"></td>
                    <td class="symbol"><input type="submit" name="8" value="8"></td>
                    <td class="symbol"><input type="submit" name="9" value="9"></td>
                    <td class="symbol"><input type="submit" name="multiply" value="*"></td>
                </tr>
                <tr class="row">
                    <td class="symbol"><input type="submit" name="4" value="4"></td>
                    <td class="symbol"><input type="submit" name="5" value="5"></td>
                    <td class="symbol"><input type="submit" name="6" value="6"></td>
                    <td class="symbol"><input type="submit" name="minus" value="-"></td>
                </tr>
                
                <tr class="row">
                    <td class="symbol"><input type="submit" name="1" value="1"></td>
                    <td class="symbol"><input type="submit" name="2" value="2"></td>
                    <td class="symbol"><input type="submit" name="3" value="3"></td>
                    <td class="symbol"><input type="submit" name="add" value="+"></td>
                </tr>
                <tr class="row">
                    <td class="symbol"><input type="submit" name="plusminus" value="+-"></td>
                    <td class="symbol"><input type="submit" name="zero" value="0"></td>
                    <td class="symbol"><input type="submit" name="." value="."></td>
                    <td class="symbol"><input type="submit" name="equal" value="="></td>
                </tr>
            </table>
        </form>
    </div>
</main>

<?php
include_once 'partials/footer.php';
?>
