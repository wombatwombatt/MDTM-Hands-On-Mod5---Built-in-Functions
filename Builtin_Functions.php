<!-- Bermas, Estella Mae E. | CYB-201 -->
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>PHP Built-in Functions</title>
<style>
:root{--bg:#f2f8ff;--card:#fff;--accent:#1e90ff;--muted:#4b5563;--border:#e6f0ff}
*{box-sizing:border-box}
body{font-family:Inter,Segoe UI,Roboto,Arial,sans-serif;margin:24px;background:var(--bg);color:#0f172a}
.wrap{max-width:980px;margin:0 auto}
.header{display:flex;gap:12px;align-items:center;margin-bottom:14px}
.logo{width:52px;height:52px;border-radius:10px;background:linear-gradient(135deg,var(--accent),#4dabff);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700}
h1{font-size:18px;margin:0}
.lead{margin:0;color:var(--muted);font-size:13px}
.card{background:var(--card);border:1px solid var(--border);border-radius:10px;padding:14px;margin-top:12px}
.section{margin-top:18px}
.table{width:100%;border-collapse:collapse;margin-top:8px;table-layout:fixed}
.table thead th{background:#fbfcff;text-align:left;padding:10px;border-bottom:1px solid var(--border);color:var(--muted)}
.table tbody td{padding:10px;border-bottom:1px dashed var(--border);font-size:14px;word-wrap:break-word}
.table thead th:nth-child(3), .table tbody td:nth-child(3){border-left:1px solid var(--border);padding-left:12px}
.table thead th:nth-child(2), .table tbody td:nth-child(2){padding-right:12px}
.table th:nth-child(1), .table td:nth-child(1){width:20%}
.table th:nth-child(2), .table td:nth-child(2){width:40%}
.table th:nth-child(3), .table td:nth-child(3){width:40%}
.code{font-family:Consolas,monospace;background:#f6fbff;padding:8px;border-radius:6px;color:#0b1220;white-space:pre-wrap}
.code.sample{background:#f6fbff}

/* highlights the sample text to show the spaces*/
.highlight{background:#fff3a8;color:#0b1220;padding:2px 6px;border-radius:4px}
.label{display:inline-block;font-weight:600;color:var(--accent);margin-bottom:6px}
.small{font-size:13px;color:var(--muted)}
.flex{display:flex;gap:12px;flex-wrap:wrap}
/* footer */
.footer{background:#0b3b8c;color:#fff;text-align:center;padding:12px;border-radius:8px;margin-top:18px;font-size:14px}
</style>
</head>
<body>
<div class="wrap">
    <div class="header">
        <div>
            <h1>MDTM Hands-On Mod5 - Built-in Functions</h1>
        </div>
    </div>

    <div class="card">
        <?php
        // Strings to use
        $school = 'HOLY ANGEL UNIVERSITY';
        $name = 'Estella Bermas';
        $sample = "   I love wombats.   ";

        // A. Changing the Case
        $lower = strtolower($school);
        $upper = strtoupper($school);
        $ucwords_val = ucwords(strtolower($school));

        // B. Counting Characters and Words
        $strlen_name = strlen($name);
        $wordcount_name = str_word_count($name);

        // C. Removing and Replacing Characters
        $ltrim = ltrim($sample);
        $rtrim = rtrim($sample);
        $trim = trim($sample);
        $replaced = str_replace('wombats', 'raccoons', $sample);
        $ireplaced = str_ireplace('Wombats', 'helldivers', $sample);
        $repeatA = str_repeat($name . ' ', 2);

        // 9 OTHER BUILT-IN FUNCTIONS
        // A. FINDING CHARACTERS IN A STRING
        $sampleString = 'It is what it is.';
        $pos = strpos($sampleString, 'is');
        $ipos = stripos($sampleString, 'is');
        $rpos = strrpos($sampleString, 'is');
        $ripos = strripos($sampleString, 'is');
        $strstr = strstr($sampleString, 'is');
        $stristr = stristr($sampleString, 'is');
        $substr_example = substr($sampleString, 3, 7);

        // B. Sorting arrays (use array 1,3,5,4,2)
        $arr = [1,3,5,4,2];
        $arr_original = $arr;
        $arr_sorted = $arr; sort($arr_sorted);
        $arr_rsorted = $arr; rsort($arr_rsorted);
        ?>

        <section class="section">
            <div class="label">A. Changing the Case of Characters</div>
            <table class="table" aria-label="Changing case">
                <thead>
                    <tr><th>Function</th><th>Input</th><th>Result</th></tr>
                </thead>
                <tbody>
                    <tr><td class="small">strtolower()</td><td class="code"><?php echo htmlspecialchars($school); ?></td><td class="code"><?php echo htmlspecialchars($lower); ?></td></tr>
                    <tr><td class="small">strtoupper()</td><td class="code"><?php echo htmlspecialchars($school); ?></td><td class="code"><?php echo htmlspecialchars($upper); ?></td></tr>
                    <tr><td class="small">ucwords()</td><td class="code"><?php echo htmlspecialchars($school); ?></td><td class="code"><?php echo htmlspecialchars($ucwords_val); ?></td></tr>
                </tbody>
            </table>
        </section>

        <section class="section">
            <div class="label">B. Counting Characters and Words</div>
            <table class="table" aria-label="Counting">
                <thead>
                    <tr><th>Function</th><th>Input</th><th>Result</th></tr>
                </thead>
                <tbody>
                    <tr><td class="small">strlen()</td><td class="code"><?php echo htmlspecialchars($name); ?></td><td class="code"><?php echo $strlen_name; ?></td></tr>
                    <tr><td class="small">str_word_count()</td><td class="code"><?php echo htmlspecialchars($name); ?></td><td class="code"><?php echo $wordcount_name; ?></td></tr>
                </tbody>
            </table>
        </section>

        <section class="section">
            <div class="label">C. Removing and Replacing Characters</div>
            <table class="table" aria-label="Trimming and replacing">
                <thead>
                    <tr><th>Function</th><th>Input</th><th>Result</th></tr>
                </thead>
                <tbody>
                    <tr><td class="small">ltrim()</td><td class="code sample"><span class="highlight"><?php echo htmlspecialchars($sample); ?></span></td><td class="code sample"><span class="highlight"><?php echo htmlspecialchars($ltrim); ?></span></td></tr>
                    <tr><td class="small">rtrim()</td><td class="code sample"><span class="highlight"><?php echo htmlspecialchars($sample); ?></span></td><td class="code sample"><span class="highlight"><?php echo htmlspecialchars($rtrim); ?></span></td></tr>
                    <tr><td class="small">trim()</td><td class="code sample"><span class="highlight"><?php echo htmlspecialchars($sample); ?></span></td><td class="code sample"><span class="highlight"><?php echo htmlspecialchars($trim); ?></span></td></tr>
                    <tr><td class="small">str_replace()</td><td class="code sample"><span class="highlight"><?php echo htmlspecialchars($sample); ?></span></td><td class="code sample"><span class="highlight"><?php echo htmlspecialchars($replaced); ?></span></td></tr>
                    <tr><td class="small">str_ireplace()</td><td class="code sample"><span class="highlight"><?php echo htmlspecialchars($sample); ?></span></td><td class="code sample"><span class="highlight"><?php echo htmlspecialchars($ireplaced); ?></span></td></tr>
                    <tr><td class="small">str_repeat()</td><td class="code"><?php echo htmlspecialchars($name); ?></td><td class="code"><?php echo htmlspecialchars($repeatA); ?></td></tr>
                </tbody>
            </table>
        </section>

        <section class="section">
            <div class="label">9 OTHER BUILT-IN FUNCTIONS</div>
            <div class="small" style="margin-top:6px">A. FINDING CHARACTERS IN A STRING (string: "It is what it is.")</div>
            <table class="table" aria-label="Finding characters">
                <thead>
                    <tr><th>Function</th><th>Input</th><th>Result</th></tr>
                </thead>
                <tbody>
                    <tr><td class="small">strpos()</td><td class="code"><?php echo htmlspecialchars($sampleString); ?></td><td class="code"><?php echo ($pos === false) ? 'not found' : $pos; ?></td></tr>
                    <tr><td class="small">stripos()</td><td class="code"><?php echo htmlspecialchars($sampleString); ?></td><td class="code"><?php echo ($ipos === false) ? 'not found' : $ipos; ?></td></tr>
                    <tr><td class="small">strrpos()</td><td class="code"><?php echo htmlspecialchars($sampleString); ?></td><td class="code"><?php echo ($rpos === false) ? 'not found' : $rpos; ?></td></tr>
                    <tr><td class="small">strripos()</td><td class="code"><?php echo htmlspecialchars($sampleString); ?></td><td class="code"><?php echo ($ripos === false) ? 'not found' : $ripos; ?></td></tr>
                    <tr><td class="small">strstr()</td><td class="code"><?php echo htmlspecialchars($sampleString); ?></td><td class="code"><?php echo htmlspecialchars($strstr); ?></td></tr>
                    <tr><td class="small">stristr()</td><td class="code"><?php echo htmlspecialchars($sampleString); ?></td><td class="code"><?php echo htmlspecialchars($stristr); ?></td></tr>
                    <tr><td class="small">substr()</td><td class="code"><?php echo htmlspecialchars($sampleString); ?></td><td class="code"><?php echo htmlspecialchars($substr_example); ?></td></tr>
                </tbody>
            </table>

            <div class="small" style="margin-top:10px">B. Sorting arrays (changing order)</div>
            <table class="table" aria-label="Sorting arrays">
                <thead>
                    <tr><th>Operation</th><th>Input</th><th>Result</th></tr>
                </thead>
                <tbody>
                    <tr><td class="small">Original array</td><td class="code"><?php echo '[' . implode(',', $arr_original) . ']'; ?></td><td class="code">—</td></tr>
                    <tr><td class="small">sort()</td><td class="code"><?php echo '[' . implode(',', $arr_original) . ']'; ?></td><td class="code"><?php echo '[' . implode(',', $arr_sorted) . ']'; ?></td></tr>
                    <tr><td class="small">rsort()</td><td class="code"><?php echo '[' . implode(',', $arr_original) . ']'; ?></td><td class="code"><?php echo '[' . implode(',', $arr_rsorted) . ']'; ?></td></tr>
                </tbody>
            </table>
        </section>

    </div>

    <footer class="footer">Estella Mae E. Bermas | CYB-201 | 2025</footer>
</div>
</body>
</html>