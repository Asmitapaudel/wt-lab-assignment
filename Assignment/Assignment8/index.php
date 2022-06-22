<?php
$gcesStaffs = [

    "Academic" => [
        [
            "Name" => "Tara bhadur Thapa",
            "Address" => "Bagar",
            "phones" => ["9856000000",""],
            "subjects" => ["C","C++"]
        ],
        [
            "Name" => "Nishal Gurung",
            "Address" => "Lamachaur",
            "phones" => ["9815277287","98460222222"],
            "subjects" => ["Java", "web"]
        ],
        [
            "Name" => "Rajendra Thapa",
            "Address" => "Mahendrapul",
            "phones" => ["984600000","984363864"],
            "subjects" => ["C++"]
        ]
    ],
    "Non-academic" => [
        [
            "Name" => "Hari KC",
            "Address" => "Kudar",
            "phones" => ["9856011111","983424848"]
        ],
        [
            "Name" => "RamBabu KC",
            "Address" => "Bagar",
            "phones" => ["9856011111","984632682"]
        ],
    ]
   
];
echo '<table border="2px" >';
echo '<tr><th>Faculty</th><th>Name</th> <th>Address</th> <th colspan=2>Phone number</th> <th colspan=2>Subjects</th></tr>';
echo '<tr>';
foreach ($gcesStaffs as $faculty => $details){
    echo '<tr>';
    
        foreach($details as $detail => $datas){
            echo "<td>$faculty</td>";
           foreach($datas as $data => $values){
        
           
            
            if(is_array($values)){
              
            
                foreach($values as $value => $v){
                    // echo "<td>$faculty</td>";
                    echo "<td> $v</td>";
                

                }
            }else {
                // echo "<td >$faculty</td>";

                echo "<td> $values </td>";
            
            }
           }
           echo '</tr>';
    
        
        
    } echo '</tr>';
}
    echo '</table>';