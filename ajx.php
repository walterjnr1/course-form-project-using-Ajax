<?php 

if (isset($_GET['Java']) || isset($_GET['PHP']) || isset($_GET['C'] )|| isset($_GET['CPlus']) || isset($_GET['JavaScript']) || isset($_GET['CSharp']) || isset($_GET['TypeScript']) || isset($_GET['FSharp']) || isset($_GET['Python']) || isset($_GET['SQL'])) {
	$i = 1;

	$Java = $_GET['Java'];
	$PHP = $_GET['PHP'];
	$C = $_GET['C'];
	$CPlus = $_GET['CPlus'];
	$JavaScript = $_GET['JavaScript'];
	$CSharp = $_GET['CSharp'];
	$TypeScript = $_GET['TypeScript'];
	$FSharp = $_GET['FSharp'];
	$Python = $_GET['Python'];
	$SQL = $_GET['SQL'];
	
	if ($Java == "Java") {
		echo '
			<tr>
				<td style="text-align:center">'.$i++.'</td>
				<td style="text-align:center">'. $Java .'</td>
			</tr>

		';
	}
	elseif ($Java == "null") {
		
	}

	if ($PHP == "PHP") {
		echo '
			<tr>
				<td style="text-align:center">'.$i++.'</td>
				<td style="text-align:center">'. $PHP .'</td>
			</tr>

		';
	}
	elseif ($PHP == "null") {
		
	}



	if ($C == "C") {
		echo '
			<tr>
				<td style="text-align:center">'.$i++.'</td>
				<td style="text-align:center">'.$C.'</td>
			</tr>

		';
	}
	elseif ($C == "null") {
		
	}



	if ($CPlus == "CPlus") {
		echo '
			<tr>
				<td style="text-align:center">'.$i++.'</td>
				<td style="text-align:center">'.$CPlus.'</td>
			</tr>

		';
	}
	elseif ($CPlus == "null") {
		
	}



	if ($JavaScript == "JavaScript") {
		echo '
			<tr>
				<td style="text-align:center">'.$i++.'</td>
				<td style="text-align:center">'.$JavaScript.'</td>
			</tr>

		';
	}
	elseif ($JavaScript == "null") {
		
	}



	if ($CSharp == "CSharp") {
		echo '
			<tr>
				<td style="text-align:center">'.$i++.'</td>
				<td style="text-align:center">'.$CSharp.'</td>
			</tr>

		';
	}
	elseif ($CSharp == "null") {
		
	}



	if ($TypeScript == "TypeScript") {
		echo '
			<tr>
				<td style="text-align:center">'.$i++.'</td>
				<td style="text-align:center">'.$TypeScript.'</td>
			</tr>

		';
	}
	elseif ($TypeScript == "null") {
		
	}



	if ($FSharp == "FSharp") {
		echo '
			<tr>
				<td style="text-align:center">'.$i++.'</td>
				<td style="text-align:center">'.$FSharp.'</td>
			</tr>

		';
	}
	elseif ($FSharp == "null") {
		
	}



	if ($Python == "Python") {
		echo '
			<tr>
				<td style="text-align:center">'.$i++.'</td>
				<td style="text-align:center">'.$Python.'</td>
			</tr>

		';
	}
	elseif ($Python == "null") {
		
	}



	if ($SQL == "SQL") {
		echo '
			<tr>
				<td style="text-align:center">'.$i++.'</td>
				<td style="text-align:center">'.$SQL.'</td>
			</tr>

		';
	}
	elseif ($SQL == "null") {
		
	}

}


if (isset($_GET['action']) && $_GET['action'] == "getCourses") {
    $output = '';
    $output .='

        <tr id="1">
            <td><input type="checkbox" name="courses[]" value="Java" id="Java"></td>
            <td>JV101</td>
            <td>Java</td>
            <td>1</td>
        </tr>

        <tr id="2">
            <td><input type="checkbox" name="courses[]" value="PHP" id="PHP"></td>
            <td>PHP101</td>
            <td>PHP</td>
            <td>1</td>
        </tr>

        <tr id="3">
            <td><input type="checkbox" name="courses[]" value="C" id="C"></td>
            <td>C101</td>
            <td>C</td>
            <td>1</td>
        </tr>

        <tr id="4">
            <td><input type="checkbox" name="courses[]" value="CPlus" id="CPlus"></td>
            <td>CP101</td>
            <td>CPlus</td>
            <td>1</td>
        </tr>

        <tr id="5">
            <td><input type="checkbox" name="courses[]" value="JavaScript" id="JavaScript"></td>
            <td>JS101</td>
            <td>JavaScript</td>
            <td>1</td>
        </tr>

        <tr id="6">
            <td><input type="checkbox" name="courses[]" value="CSharp" id="CSharp"></td>
            <td>CS101</td>
            <td>CSharp</td>
            <td>1</td>
        </tr>

        <tr id="7">
            <td><input type="checkbox" name="courses[]" value="TypeScript" id="TypeScript"></td>
            <td>TP101</td>
            <td>TypeScript</td>
            <td>1</td>
        </tr>

        <tr id="8">
            <td><input type="checkbox" name="courses[]" value="FSharp" id="FSharp"></td>
            <td>FS101</td>
            <td>FSharp</td>
            <td>1</td>
        </tr>

        <tr id="9">
            <td><input type="checkbox" name="courses[]" value="Python" id="Python"></td>
            <td>PY101</td>
            <td>Python</td>
            <td>1</td>
        </tr>

        <tr id="10">
            <td><input type="checkbox" name="courses[]" value="SQL" id="SQL"></td>
            <td>SQL101</td>
            <td>SQL</td>
            <td>1</td>
        </tr>
    ';
        
    echo $output;
        
}


if (isset($_GET['action']) && $_GET['action'] == "deleteCourses") {
	$output = '';
    $output .='

        <tr id="1">
            <td><input type="checkbox" name="courses[]" value="Java" id="Java"></td>
            <td>JV101</td>
            <td>Java</td>
            <td>1</td>
        </tr>

        <tr id="2">
            <td><input type="checkbox" name="courses[]" value="PHP" id="PHP"></td>
            <td>PHP101</td>
            <td>PHP</td>
            <td>1</td>
        </tr>

        <tr id="3">
            <td><input type="checkbox" name="courses[]" value="C" id="C"></td>
            <td>C101</td>
            <td>C</td>
            <td>1</td>
        </tr>

        <tr id="4">
            <td><input type="checkbox" name="courses[]" value="CPlus" id="CPlus"></td>
            <td>CP101</td>
            <td>CPlus</td>
            <td>1</td>
        </tr>

        <tr id="5">
            <td><input type="checkbox" name="courses[]" value="JavaScript" id="JavaScript"></td>
            <td>JS101</td>
            <td>JavaScript</td>
            <td>1</td>
        </tr>

        <tr id="6">
            <td><input type="checkbox" name="courses[]" value="CSharp" id="CSharp"></td>
            <td>CS101</td>
            <td>CSharp</td>
            <td>1</td>
        </tr>

        <tr id="7">
            <td><input type="checkbox" name="courses[]" value="TypeScript" id="TypeScript"></td>
            <td>TP101</td>
            <td>TypeScript</td>
            <td>1</td>
        </tr>

        <tr id="8">
            <td><input type="checkbox" name="courses[]" value="FSharp" id="FSharp"></td>
            <td>FS101</td>
            <td>FSharp</td>
            <td>1</td>
        </tr>

        <tr id="9">
            <td><input type="checkbox" name="courses[]" value="Python" id="Python"></td>
            <td>PY101</td>
            <td>Python</td>
            <td>1</td>
        </tr>

        <tr id="10">
            <td><input type="checkbox" name="courses[]" value="SQL" id="SQL"></td>
            <td>SQL101</td>
            <td>SQL</td>
            <td>1</td>
        </tr>
    ';
    echo $output;
}

 ?>