<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<title>TP PHP 2.2 - Employés</title>
<style type="text/css">
    div {position:fixed; top:10px; left:50%; border:1px black solid;}
    .hautsalaire {background-color:orange;}
    .bassalaire {background-color:lightblue;}
</style>
<body>
<div><p class="hautsalaire">Haut salaire &gt; 5000</p><p class="bassalaire">Bas salaire &lt;= 5000</p><input type="text" value="Désactivé si âge &gt; 50" disabled/></div>

<table>
<?php


function nombreV(string $ch)

{
    
    $v = preg_replace("/([^aeyuio])/","", $ch);
    return strlen($v);

}
$employees = array ( 0 => array ( 'id' => '6', 'name' => 'Geraldine Meyer', 'salary' => '872', 'age' => '95', ), 1 => array ( 'id' => '7', 'name' => 'Idona Glenn', 'salary' => '4230', 'age' => '25', ), 2 => array ( 'id' => '8', 'name' => 'Martena Hyde', 'salary' => '9776', 'age' => '70', ), 3 => array ( 'id' => '9', 'name' => 'Colette Mcmillan', 'salary' => '6873', 'age' => '37', ), 4 => array ( 'id' => '10', 'name' => 'Raya Cook', 'salary' => '6296', 'age' => '45', ), 5 => array ( 'id' => '11', 'name' => 'Warren Hendrix', 'salary' => '6822', 'age' => '62', ), 6 => array ( 'id' => '12', 'name' => 'Lionel Best', 'salary' => '345', 'age' => '53', ), 7 => array ( 'id' => '13', 'name' => 'Louis Brown', 'salary' => '7477', 'age' => '41', ), 8 => array ( 'id' => '14', 'name' => 'Ginger Wolf', 'salary' => '4137', 'age' => '77', ), 9 => array ( 'id' => '15', 'name' => 'Sade May', 'salary' => '9829', 'age' => '65', ), 10 => array ( 'id' => '16', 'name' => 'George Doyle', 'salary' => '4405', 'age' => '97', ), 11 => array ( 'id' => '17', 'name' => 'Devin Sheppard', 'salary' => '3136', 'age' => '70', ), 12 => array ( 'id' => '18', 'name' => 'Marah Witt', 'salary' => '551', 'age' => '99', ), 13 => array ( 'id' => '19', 'name' => 'Jermaine Bowman', 'salary' => '6824', 'age' => '94', ), 14 => array ( 'id' => '20', 'name' => 'Gabriel Romero', 'salary' => '940', 'age' => '99', ), 15 => array ( 'id' => '21', 'name' => 'Roanna Carrillo', 'salary' => '5084', 'age' => '61', ), 16 => array ( 'id' => '22', 'name' => 'Wayne Houston', 'salary' => '74', 'age' => '69', ), 17 => array ( 'id' => '23', 'name' => 'Yuli Mccarthy', 'salary' => '8820', 'age' => '76', ), 18 => array ( 'id' => '24', 'name' => 'Hamilton Stevens', 'salary' => '2958', 'age' => '75', ), 19 => array ( 'id' => '25', 'name' => 'Halee Gay', 'salary' => '8932', 'age' => '68', ), 20 => array ( 'id' => '26', 'name' => 'Curran Townsend', 'salary' => '927', 'age' => '70', ), 21 => array ( 'id' => '27', 'name' => 'Lacy Marks', 'salary' => '8484', 'age' => '28', ), 22 => array ( 'id' => '28', 'name' => 'Chaim Bright', 'salary' => '8067', 'age' => '66', ), 23 => array ( 'id' => '29', 'name' => 'Byron Gordon', 'salary' => '2793', 'age' => '92', ), 24 => array ( 'id' => '30', 'name' => 'Griffin Hickman', 'salary' => '4058', 'age' => '71', ), 25 => array ( 'id' => '31', 'name' => 'Lyle Mcmillan', 'salary' => '1083', 'age' => '84', ), 26 => array ( 'id' => '32', 'name' => 'Andrew Hess', 'salary' => '7823', 'age' => '25', ), 27 => array ( 'id' => '33', 'name' => 'Alice Howe', 'salary' => '489', 'age' => '60', ), 28 => array ( 'id' => '34', 'name' => 'Channing Lewis', 'salary' => '4423', 'age' => '61', ), 29 => array ( 'id' => '35', 'name' => 'Rashad Harrison', 'salary' => '5598', 'age' => '56', ), 30 => array ( 'id' => '36', 'name' => 'Castor Barlow', 'salary' => '1671', 'age' => '37', ), 31 => array ( 'id' => '37', 'name' => 'Allistair Riddle', 'salary' => '4557', 'age' => '30', ), 32 => array ( 'id' => '38', 'name' => 'Jane Woodard', 'salary' => '9649', 'age' => '64', ), 33 => array ( 'id' => '39', 'name' => 'Jerome Flynn', 'salary' => '9881', 'age' => '77', ), 34 => array ( 'id' => '40', 'name' => 'Melyssa Hunter', 'salary' => '3315', 'age' => '79', ), 35 => array ( 'id' => '41', 'name' => 'Nathan Craig', 'salary' => '8729', 'age' => '63', ), 36 => array ( 'id' => '42', 'name' => 'Arsenio Saunders', 'salary' => '3859', 'age' => '35', ), 37 => array ( 'id' => '43', 'name' => 'Kane Franco', 'salary' => '434', 'age' => '89', ), 38 => array ( 'id' => '44', 'name' => 'Amethyst Matthews', 'salary' => '1961', 'age' => '66', ), 39 => array ( 'id' => '45', 'name' => 'Rebekah Lee', 'salary' => '8698', 'age' => '81', ), 40 => array ( 'id' => '46', 'name' => 'Noah Booth', 'salary' => '7788', 'age' => '75', ), 41 => array ( 'id' => '47', 'name' => 'Oren Dudley', 'salary' => '9985', 'age' => '42', ), 42 => array ( 'id' => '48', 'name' => 'August Wynn', 'salary' => '103', 'age' => '94', ), 43 => array ( 'id' => '49', 'name' => 'Eleanor Wells', 'salary' => '8637', 'age' => '33', ), 44 => array ( 'id' => '50', 'name' => 'Brittany Figueroa', 'salary' => '9216', 'age' => '29', ), 45 => array ( 'id' => '51', 'name' => 'Justin Fox', 'salary' => '9745', 'age' => '35', ), 46 => array ( 'id' => '52', 'name' => 'Elaine Wilder', 'salary' => '270', 'age' => '69', ), 47 => array ( 'id' => '53', 'name' => 'Nathaniel Reid', 'salary' => '200', 'age' => '64', ), 48 => array ( 'id' => '54', 'name' => 'Kirsten Cobb', 'salary' => '9131', 'age' => '87', ), 49 => array ( 'id' => '55', 'name' => 'Lacey Hobbs', 'salary' => '6971', 'age' => '49', ), 50 => array ( 'id' => '56', 'name' => 'Kuame Myers', 'salary' => '7913', 'age' => '40', ), 51 => array ( 'id' => '57', 'name' => 'Winifred Bush', 'salary' => '1969', 'age' => '40', ), 52 => array ( 'id' => '58', 'name' => 'Gisela Williams', 'salary' => '6574', 'age' => '94', ), 53 => array ( 'id' => '59', 'name' => 'Hector Blankenship', 'salary' => '7928', 'age' => '28', ), 54 => array ( 'id' => '60', 'name' => 'Driscoll Fields', 'salary' => '4624', 'age' => '87', ), 55 => array ( 'id' => '61', 'name' => 'Illana Fitzpatrick', 'salary' => '1484', 'age' => '72', ), 56 => array ( 'id' => '62', 'name' => 'Britanni Cummings', 'salary' => '391', 'age' => '72', ), 57 => array ( 'id' => '63', 'name' => 'Ciara Ortiz', 'salary' => '1415', 'age' => '77', ), 58 => array ( 'id' => '64', 'name' => 'Kareem William', 'salary' => '8865', 'age' => '78', ), 59 => array ( 'id' => '65', 'name' => 'Armand Jacobs', 'salary' => '3065', 'age' => '29', ), 60 => array ( 'id' => '66', 'name' => 'Danielle Herman', 'salary' => '5013', 'age' => '92', ), 61 => array ( 'id' => '67', 'name' => 'Blossom Woodard', 'salary' => '4128', 'age' => '78', ), 62 => array ( 'id' => '68', 'name' => 'Angela Yang', 'salary' => '7137', 'age' => '87', ), 63 => array ( 'id' => '69', 'name' => 'Felix Holder', 'salary' => '6001', 'age' => '96', ), 64 => array ( 'id' => '70', 'name' => 'Nehru Bender', 'salary' => '5635', 'age' => '83', ), 65 => array ( 'id' => '71', 'name' => 'Scott Hardy', 'salary' => '4910', 'age' => '98', ), 66 => array ( 'id' => '72', 'name' => 'Colorado Levine', 'salary' => '6328', 'age' => '52', ), 67 => array ( 'id' => '73', 'name' => 'Patrick Tillman', 'salary' => '1384', 'age' => '60', ), 68 => array ( 'id' => '74', 'name' => 'Laith Ellis', 'salary' => '7404', 'age' => '50', ), 69 => array ( 'id' => '75', 'name' => 'Chanda Mcmillan', 'salary' => '4159', 'age' => '53', ), 70 => array ( 'id' => '76', 'name' => 'Moses Clarke', 'salary' => '3351', 'age' => '44', ), 71 => array ( 'id' => '77', 'name' => 'Amery Chavez', 'salary' => '3545', 'age' => '85', ), 72 => array ( 'id' => '78', 'name' => 'Wyatt Parks', 'salary' => '1048', 'age' => '42', ), 73 => array ( 'id' => '79', 'name' => 'Vivian Browning', 'salary' => '2321', 'age' => '68', ), 74 => array ( 'id' => '80', 'name' => 'Juliet Wyatt', 'salary' => '1325', 'age' => '25', ), 75 => array ( 'id' => '81', 'name' => 'Zenaida Ballard', 'salary' => '1910', 'age' => '88', ), 76 => array ( 'id' => '82', 'name' => 'Paul Long', 'salary' => '5681', 'age' => '86', ), 77 => array ( 'id' => '83', 'name' => 'Armando Green', 'salary' => '6011', 'age' => '28', ), 78 => array ( 'id' => '84', 'name' => 'Rina Nguyen', 'salary' => '324', 'age' => '68', ), 79 => array ( 'id' => '85', 'name' => 'Megan Olsen', 'salary' => '8603', 'age' => '74', ), 80 => array ( 'id' => '86', 'name' => 'Jenna Wolf', 'salary' => '6139', 'age' => '48', ), 81 => array ( 'id' => '87', 'name' => 'Fletcher Lewis', 'salary' => '7232', 'age' => '93', ), 82 => array ( 'id' => '88', 'name' => 'Tucker Barber', 'salary' => '7678', 'age' => '77', ), 83 => array ( 'id' => '89', 'name' => 'Jared Haney', 'salary' => '4978', 'age' => '43', ), 84 => array ( 'id' => '90', 'name' => 'Timon Rosario', 'salary' => '3072', 'age' => '95', ), 85 => array ( 'id' => '91', 'name' => 'Elmo Mcfarland', 'salary' => '4049', 'age' => '72', ), 86 => array ( 'id' => '92', 'name' => 'Briar Carter', 'salary' => '4592', 'age' => '97', ), 87 => array ( 'id' => '93', 'name' => 'Liberty Hinton', 'salary' => '3151', 'age' => '75', ), 88 => array ( 'id' => '94', 'name' => 'Shad Gibbs', 'salary' => '4675', 'age' => '27', ), 89 => array ( 'id' => '95', 'name' => 'Lee Henson', 'salary' => '2233', 'age' => '53', ), 90 => array ( 'id' => '96', 'name' => 'Ignacia Diaz', 'salary' => '7481', 'age' => '51', ), 91 => array ( 'id' => '97', 'name' => 'Aristotle Byers', 'salary' => '8314', 'age' => '49', ), 92 => array ( 'id' => '98', 'name' => 'Rachel Sweet', 'salary' => '9', 'age' => '41', ), 93 => array ( 'id' => '99', 'name' => 'Rafael O\'connor', 'salary' => '8725', 'age' => '71', ), 94 => array ( 'id' => '100', 'name' => 'Mollie Kemp', 'salary' => '9504', 'age' => '31', ), 95 => array ( 'id' => '101', 'name' => 'Nyssa Rich', 'salary' => '4589', 'age' => '77', ), 96 => array ( 'id' => '102', 'name' => 'Brett Larson', 'salary' => '3480', 'age' => '51', ), 97 => array ( 'id' => '103', 'name' => 'Harding Owens', 'salary' => '5367', 'age' => '38', ), 98 => array ( 'id' => '104', 'name' => 'Eugenia Pickett', 'salary' => '3469', 'age' => '55', ), 99 => array ( 'id' => '105', 'name' => 'Maxwell Cameron', 'salary' => '3249', 'age' => '28', ), );


foreach($employees as $key=>$val)
{

    
    $alaire=$val['salary'];
    $cl=($alaire>5000) ?  "bassalaire" : "hautsalaire";
    
    $nom=$val['name'];
    $nbVoyelle=nombreV($nom);

    $age=$val['age'];
    $present=($age>50) ? "disabled" : "";

   echo<<< IDF

   <tr class=$cl >
         <td title= "$nbVoyelle Voyelles  salire:$alaire" > $nom </td>

         
         <td> <input type="number" min="0" max="100" value="$age"  $present>
         </td>
    
    </tr>


   IDF;


}
?>

</table>

<!--
    EXEMPLE DE GENERATION HMTL POUR LES 2 PREMIERS EMPLOYES
<table>
    <tr class="bassalaire">
        <td title="7 voyelles, 872€">Geraldine Meyer</td>
        <td><input type="number" min="0" max="100" value="95" disabled/></td>
    </tr>
    <tr class="hautsalaire">
        <td title="4 voyelles, 4230€">Idona Glenn</td>
        <td><input type="number" min="0" max="100" value="25"/></td>
    </tr>
</table>
-->

</body>
</html>