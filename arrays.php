<?php
//indexed or numeric array
$colors=["black", "yellow", "green"];
print_r($colors);

?>
<br>
<?php
$user=array("Alex","Peter","Ann");
print $user[2];
?>
<pre>
<?php print_r($user);?>
</pre>
<?php
//associative arrays
$user_data=[
    "fullname"=>"Alex Okama",
   "email"=>"AOkama@yahoo.com",
   "phone"=>"+254567654" 
];
print $user_data["email"];
?>
<pre>
    <?php
    print_r($user_data);
    ?>
</pre>
<?php
//multidimensianal arrays
$user_details=[
    "Director"=>array(
        "fullname"=>"Alex Okama",
        "Address"=>"Mada",
        "email"=>"AOkama@yahoo.com",
        "phone"=>[
           "Home"=> "+254567654" ,
           "work"=>"+2546745552",
           "Mobile"=>"+2543655682",

        ]
        ),

    "Secretary"=>array(
        "fullname"=>"James Otieno",
        "Address"=>"Mada",
        "email"=>"AOkama@yahoo.com",
        "phone"=>[
           "Home"=> "+254567654" ,
           "work"=>"+2546745552",
           "Mobile"=>"+2543655682",

        ]
        ),
        "Manager"=>array(
            "fullname"=>"Jane Wesonga",
            "Address"=>"Mada",
            "email"=>"AOkama@yahoo.com",
            "phone"=>[
               "Home"=> "+254567654" ,
               "work"=>"+2541234567",
               "Mobile"=>"+2543655682",
    
            ]
        )
        
    
            ];
    print $user_details
    ["Manager"]["phone"]["work"];
?>
<pre>
<?php print_r($user_details); ?>
 </pre>