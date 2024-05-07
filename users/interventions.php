<?php
ob_start();
session_start();
include('.././connection/connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    if(isset($_GET['patient_id'])){
        $patient_id = $_GET['patient_id'];

        $query = "SELECT * FROM infants WHERE patient_id = '$patient_id'";
        $run = mysqli_query($conn,$query);

        if(mysqli_num_rows($run) > 0){
            foreach($run as $row_patient){
                ?>

                    <a href="view-patient.php?patient_id=<?php echo $row_patient['patient_id']?>">Back</a>

                <?php
            }
        }
    }

?>


<h2>Interventions</h2>

<form action="" method="POST" enctype='multipart/form-data'>

<textarea name="interventions">
<table style="width: 100%; table-layout: fixed;">
    <tr>
        <td>
            <p style="text-align: center; font-weight: bold;">1st Month</p>
            <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1. Begins to focus on objects up to 12 inches away </b> </li>
                            <ul>
                                a.	Monitor on the baby's visual behavior, making note of their movements and how they react to things they see.
                            </ul>
                            <ul>
                            b.	 Promote visual exploration, create a visually engaging environment with toys and objects that are age-appropriate and arranged at different distances.
                            </ul>
                            <ul>
                            c.	Encourage parents or other caregivers to participate in activities that foster visual development, such as playing with toys that are brightly colored or books that have contrasting patterns, and educate them about the value of visual stimulation.
                            </ul>
                            <li> <b> 2. Follows objects with eyes </b></li>
                            <ul>
                                a.	Establish a Stimulating Environment: To encourage visual tracking and stimulation of the visual system, establish a visually stimulating environment with contrasting colors and patterns.
                            </ul>
                            <ul>
                            b.	Optimize lighting: To improve visual perception and promote the development of visual tracking skills, make sure the infant's surroundings have enough illumination.
                            </ul>
                            <ul>
                            c.	Encourage Visual Stimulation: Give your baby tasks that will help them track their eyes, including slowly moving bright toys or other items in their direct line of sight.
                            </ul>
                                
                            
                            <li><b> 3. 	Reacts to loud sounds </b></li>
                            <ul>
                                a.	Evaluate Sensory Threshold: See how the baby responds to a range of sounds to ascertain how sensitive they are to different decibel levels.
                            </ul>
                            <ul>
                            b.	Establish a Calm Environment: Keep the newborn's surroundings quiet and serene to reduce exposure to loud noises.
                            </ul>
                            <ul>
                            c.	Use Sound-Reducing tactics: To lessen the impact of loud noises, use tactics like shutting doors, placing objects that absorb sound, or turning on calming music at a low volume.
                            </ul>

                               
                            <li><b>4. May briefly lift head while lying on stomach</b></li>
                            <ul>
                            a.	Assess: When the baby is resting on their tummy, gauge how well they can raise their head. Make a note of any challenges or restrictions.
                            </ul>
                            <ul>
                            b.	Positioning: To make head raising easier, place the baby on a level, hard surface with their face turned to one side.
                            </ul>
                            <ul>
                            c.	Support: To promote head lifting without causing strain, place support beneath the newborn's shoulders and chest.
                            </ul>
                            
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
        <td>
        <p style="text-align: center; font-weight: bold;">2nd Month</p>
        <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1.	Begins to smile responsively</b></li>
                            <ul>a.	Assess the newborn's general development and progress, taking into account their motor, social, and communicative skills.</ul>
                            <ul>b.	Perform a comprehensive physical assessment to exclude any underlying medical issues or congenital anomalies that could potentially impact the development of the child.</ul>
                            <ul>c.	promote social interaction and motor development, provide play activities and stimulation that is age-appropriate.</ul>
                            <li><b>2.	Coos and gurgles</b></li>
                            <ul>a.	Examine the newborn's capacity to respond to verbal cues and produce sounds in order to measure communication skills.</ul>
                            <ul>b.	Establish a Stimulating atmosphere: Through play and interaction, establish a loving and stimulating atmosphere that promotes vocalization.</ul>
                            <ul>c.	Promote Vocalization: Talk, sing, and make noises while interacting vocally with the baby to foster imitation.</ul>
                            <li><b>3.	Recognizes familiar faces</b></li>
                            <ul>a.	Encourage parents and other caregivers to participate in activities that foster attachment and bonding, including as making skin-to-skin contact, speaking softly to the baby, and keeping eye contact while performing daily tasks.</ul>
                            <ul>b.	Provide Sensory Stimulation: Make the newborn's surroundings lively by bringing in toys, mobiles, and visual stimuli that are suitable for their age. Encourage parents to use soft touch and aural stimulation, like calming noises or music, when interacting with their newborn.</ul>
                            <li><b>4.	Holds head up momentarily while lying on stomach</b></li>
                            <ul>a.	Evaluate Developmental Milestones: Track and evaluate the baby's advancement toward meeting developmental benchmarks, such as being able to hold their head aloft when in a prone position.</ul>
                            <ul>b.	Positioning: To promote head control and improve neck muscles, give children opportunities for stomach time. When the infant is awake and under supervision, place them on their stomach for brief periods of time several times a day on a hard surface.</ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table style="width: 100%; table-layout: fixed;">
    <tr>
        <td>
            <p style="text-align: center; font-weight: bold;">3rd Month</p>
            <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1.	Follows moving objects with eyes</b></li>
                            <ul>a. Offering a variety of colorful and contrasting toys or objects that can be gently moved in front of the baby can stimulate their visual senses and encourage them to track these items with their eyes.</ul>
                            <ul>b. Interacting with the baby through conversation, eye contact, and verbal encouragement to follow the moving objects fosters a strong connection between parent and child while also aiding the baby's cognitive growth.</ul>
                            <ul>c. Evaluating the duration of the baby's attention on the moving objects helps gauge their ability to concentrate and engage with visual stimuli effectively.</ul>
                            <li><b>2.	Begins to hold head steady when upright</b></li>
                            <ul>a. Regularly encouraging tummy time sessions aids in strengthening the baby's neck and upper body muscles, crucial for maintaining head stability when upright.
                            </ul>
                            <ul>
                            b. Monitoring the baby's ability to maintain a steady head position when placed upright, whether with caregiver support or independently, reflects the advancement of their neck and upper body strength.
                            </ul>
                            <ul>c. Offering gentle verbal support and positive reinforcement while the baby endeavors to keep their head steady can inspire ongoing progress in mastering this ability.</ul>
                            <li><b>3.Begins to imitate facial expressions</b></li>
                            <ul>a. Interacting face-to-face with the baby, displaying exaggerated facial expressions, and sustaining eye contact prompts them to observe and replicate facial gestures.
                            </ul>
                            <ul>b. Incorporating playful sounds or movements alongside facial expressions can attract the baby's interest and inspire them to mirror the expressions in an enjoyable manner.</ul>
                            <ul>c. Assessing whether the baby tries to mimic facial expressions, like returning a smile when smiled at or mimicking a concerned expression by furrowing their brow, showcases their capacity to imitate facial actions. </ul>
                            <li><b>4.Recognizes familiar voices</b></li>
                            <ul>a. Noticing if the baby shows signs of comfort or recognition, like calming down or smiling, upon hearing familiar voices demonstrates their capacity to differentiate between familiar and unfamiliar voices.
                            </ul>
                            <ul>
                            b. Speaking regularly to the baby in a comforting and captivating manner assists in acquainting them with the voices of their caregivers.
                            </ul>
                            <ul>c. Promoting ongoing interactions with the baby, wherein the same caregivers consistently use their voices during various activities like feeding, playtime, and comforting, strengthens the baby's recognition of familiar voices.</ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
        <td>
        <p style="text-align: center; font-weight: bold;">4th Month</p>
        <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1.	Begins to roll from tummy to back </b></li>
                            <ul>a. Assisting the baby with gentle support or guidance, such as placing a hand on their hip or shoulder during tummy time, aids in initiating and completing the rolling motion.</ul>
                            <ul>b. Giving words of encouragement and praise when the baby tries or accomplishes rolling from tummy to back strengthens their determination and encourages continued exploration and growth.</ul>
                            <ul>c. Recognizing occasions when the baby achieves a successful roll from tummy to back showcases their increasing strength and coordination in performing the action.</ul>
                            <li><b>2. Laughs out loud</b></li>
                            <ul>a. Evaluating how the baby's laughter fosters social interaction with caregivers and others illustrates their capacity to form emotional connections through laughter.</ul>
                            <ul>b. Participating in fun interactions like tickling, pulling funny faces, or playing peek-a-boo with the baby can induce laughter and prompt them to demonstrate happiness.</ul>
                            <ul>c. Entertaining the baby with silly songs or dancing can bring about laughter as they delight in the rhythmic motions and lively melodies.</ul>
                            <li><b>3. Reaches for and grabs objects</b></li>
                            <ul>a. Providing a range of safe and suitable toys or items that are easy for the baby to hold stimulates them to reach out and engage with their surroundings.</ul>
                            <ul>b. Positioning toys or objects within the baby's grasp during playtime fosters the development of hand-eye coordination and fine motor skills as they strive to reach and grasp items.</ul>
                            <ul>c. Noting the baby's extension of their arms and reaching movements towards accessible objects illustrates their emerging capability to grasp and retrieve items.</ul>
                            <li><b>4. Begins to push up on arms while lying on stomach</b></li>
                            <ul>a. Encouraging interactive play during tummy time, like positioning toys slightly out of reach, motivates the baby to push up on their arms as they strive to grasp the items.</ul>
                            <ul>b. Noting if the baby tries to raise themselves using their arms while lying on their stomach signals their preparedness to acquire this ability.</ul>
                            <ul>c. Evaluating the coordination of the baby's movements, including how well their head, neck, shoulders, and arms align during push-ups, offers understanding into their motor skills advancement and muscle coordination.</ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table style="width: 100%; table-layout: fixed;">
    <tr>
        <td>
            <p style="text-align: center; font-weight: bold;">5th Month</p>
            <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1. Begins to sit with support</b></li>
                            <ul>a. Parents should be trained on safe and comfortable baby sitting positions, emphasizing the need for adequate support to prevent falls or injuries.</ul>
                            <ul>b. Parents should encourage activities that enhance baby's sitting skills, such as using soft blocks or sound-making toys, to strengthen core muscles and improve sitting stability.</ul>
                            <ul>c.	Educate parents on 5-month-old baby developmental milestones, emphasize monitoring progress, and seek medical advice if concerns arise. Offer reassurance and guidance to alleviate parental anxiety.</ul>
                            <li><b>2.	Begins to roll from back to tummy</b></li>
                            <ul>a. Ensure baby's safety by providing close supervision during playtime and sleep, as they may roll onto their tummy during sleep, and gently roll them back onto their back if necessary.</ul>
                            <ul>b. Tummy time during awake periods strengthens neck, shoulder, and arm muscles, prevents flattening of head back, and promotes motor development. Offer short, frequent sessions gradually increasing duration as tolerated.</ul>
                            <ul>c. Caregivers should be educated on baby milestones, creating a safe environment, promoting tummy time, and engaging in interactive play activities to support the baby's development.</ul>
                            <li><b>3.	Explores objects with mouth</b></li>
                            <ul>a. Assess the baby's overall health and development to rule out any underlying medical conditions that might be affecting their ability to explore objects with their mouth.
                            </ul>
                            <ul>b. Promote oral motor skills</ul>
                            <ul>c.  Educate parents on the importance of sensory exploration and oral motor skill development in infants: provide guidance on how they can support their baby's development through activities and play at home</ul>
                            <li><b>4. Begins to babble with consonant sounds</b></li>
                            <ul>a. Encourage parents to engage in verbal interactions with their baby, fostering language development and strengthening the parent-child bond through smiles, eye contact, and sound imitation.</ul>
                            <ul>b. To enhance babbling skills, suggest toys that produce sounds or textures when touched, encouraging exploration and vocalization.</ul>
                            <ul>c. Parents should encourage tummy time in their baby's daily routine to strengthen speech muscles, support physical development, and facilitate vocalization by improving control over mouth and tongue movements.</ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
        <td>
        <p style="text-align: center; font-weight: bold;">6th Month</p>
        <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1.	Begins to roll over both ways (front to back, back to front).</b></li>
                            <ul>a. Encourage tummy time to promote muscle strength and coordination. </ul>
                            <li><b>2. Begins babbling consonant-vowel combinations (e.h., “ba-ba” or “ca-da”).</b></li>
                            <ul>a. Engage in interactive activities like reading, singing, and talking to the baby to stimulate language development. </ul>
                            <li><b>3.	Ability to sit with support and showing interest in self-feeding.</b></li>
                            <ul>a. Offer age-appropriate solid foods and encourage self-feeding with safe utensils. Ensure proper positioning during feeding to prevent choking.</ul>
                            <ul>b. Consult a pediatrician or feeding specialist for evaluation if there are concerns about swallowing difficulties.</ul>
                            <li><b>4. Demonstrating curiosity and exploring objects with hands and mouth.</b></li>
                            <ul>a. Provide a variety of safe toys and objects for exploration. Engage in interactive play to stimulate cognitive development. Ensure a safe and stimulating environment for the baby to explore.</ul>
                            <li><b>5.	Responding to familiar faces with smiles or vocalizations.</b></li>
                            <ul>a. Engage in face-to-face interactions, cuddling, and playing games like peek-a-boo to promote bonding and social development. Ensure the baby has regular opportunities for social interaction with caregivers and other family members. </ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table style="width: 100%; table-layout: fixed;">
    <tr>
        <td>
            <p style="text-align: center; font-weight: bold;">7th Month</p>
            <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1.	Begins to bear weight on legs when held upright:</b></li>
                            <ul>a. Encourage activities that promote weight-bearing on the legs, such as supported standing while holding onto furniture or caregiver's hands.
                            </ul>
                            <ul>b. Provide toys or objects at standing height to motivate the child to reach and support themselves.</ul>
                            <ul>c. Refer the child to a pediatric physical therapist for assessment and intervention to address any underlying issues affecting mobility and gross motor skills.</ul>
                            <li><b>2.	Begins to crawl (or scoot):</b></li>
                            <ul>a. Create a safe and stimulating environment that encourages exploration and movement.
                            </ul>
                            <ul>b. Offer plenty of supervised tummy time to strengthen the baby's muscles and encourage crawling.</ul>
                            <li><b>3.	Begins to respond to simple commands (e.g., "come here"):</b></li>
                            <ul>a. Engage in frequent verbal interactions. Use clear and consistent commands or repetitive phrases to encourage language development.
                            </ul>
                            <ul>b. Offer positive reinforcement and rewards such as smiles, hugs, or praise when the child responds appropriately.</ul>
                            <li><b>4.	Begins to understand "no":</b></li>
                            <ul>a. Be consistent in using the word "no" to redirect the child from unsafe behaviors.
                            </ul>
                            <ul>b. Provide gentle guidance and offer alternatives to forbidden actions, along with positive reinforcement when the child complies.</ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
        <td>
        <p style="text-align: center; font-weight: bold;">8th Month</p>
        <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1.	Begins to pull self to standing position:</b></li>
                            <ul>a. Encourage the child to practice pulling up to a standing position by placing toys or objects within reach and at varying heights.</ul>
                            <ul>b. Ensure the environment is safe and secure to prevent falls.</ul>
                            <li><b>2.	Begins to play peek-a-boo:</b></li>
                            <ul>-	Initiate peek-a-boo games with the child using hands, blankets, or toys to hide and reveal faces.
                            </ul>
                            <ul>Encourage the child to participate by responding enthusiastically to the game.</ul>
                            <li><b>3.	Begins to say "mama" and "dada" nonspecifically:</b></li>
                            <ul>a. Repeat the words "mama" and "dada" frequently in association with the respective caregivers.</ul>
                            <ul>b. Encourage vocalization by engaging in conversations with the child and responding positively to any attempts at communication.</ul>
                            <li><b>4.	Begins to understand simple gestures (e.g., waving bye-bye):</b></li>
                            <ul>a. Model simple gestures like waving bye-bye during interactions with the child.</ul>
                            <ul>b. Encourage imitation by demonstrating the gesture and providing praise when the child attempts to mimic it.</ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table style="width: 100%; table-layout: fixed;">
    <tr>
        <td>
            <p style="text-align: center; font-weight: bold;">9th Month</p>
            <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1.	Begins Development of Physical:</b></li>
                            <ul>a. Allow plenty of supervised tummy time to build the neck and upper body muscles. Provide secure locations for crawling, exploring, etc.</ul>
                            <ul>b. Offer toys that encourage reaching and grasping:</ul>
                            <li><b>2.	Begins Sitting Independently: </b></li>
                            <ul>a. Place the infant in a supported sitting position on the floor or in a high chair with a safe harness.</ul>
                            <ul>b. Encourage reaching for toys while sitting to help with balance and coordination.</ul>
                            <li><b>1.	Begins the development of support muscle strength:</b></li>
                            <ul>a. Provide children the chance to climb on low, secure constructions like pillows stacked at varying heights or padded ramps.</ul>
                            <ul>b. Encourage participation in baby-friendly yoga or stretching exercises to promote flexibility and muscle tone.</ul>
                            <li><b>4.	Begins  Push up to a crawl position and sit back down:</b></li>
                            <ul>a. Gently support and reward your baby's efforts while they experiment with various crawling strategies, such as traditional hands-and-knees crawling, army crawling, or another way.</ul>
                            <ul>b. Continue to provide your baby opportunities to practise sitting independently and moving between sitting and crawling positions.</ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
        <td>
        <p style="text-align: center; font-weight: bold;">10th Month</p>
        <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1.	Pulling themselves up to stand:</b></li>
                            <ul>a. Provide secure and sturdy surfaces: Make sure that furniture, including sofas or low tables</ul>
                            <ul>b. Place items in the child's play area at varying heights to promote exploration and provide experience standing up.</ul>
                            <li><b>2.	Begins developing gestures or actions:</b></li>
                            <ul>a. Give practice opportunities: Include gestures in regular activities and routines, </ul>
                            <ul>b. Encourage your child to emulate you by demonstrating different motions, including blowing kisses, clapping hands, or waving farewell.</ul>
                            <li>3.	Beginning to understand simple instructions or gestures:</li>
                            <ul>a. To make instructions easier for a child to understand, speak in brief, straightforward sentences and supplement spoken instructions with gestures or visual signals.</ul>
                            <ul>b. Demonstrate actions or gestures that you want the child to imitate, such as waving goodbye or clapping hands</ul>
                            <li><b>4.	Beginning to show preferences for certain toys or activities:</b></li>
                            <ul>a. Encourage the child to explore and interact with toys and activities at their own pace. </ul>
                            <ul>b. To keep the toddler engaged, periodically introduce new toys and activities.</ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table style="width: 100%; table-layout: fixed;">
    <tr>
        <td>
            <p style="text-align: center; font-weight: bold;">11th Month</p>
            <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1.	Motor Skills:</b></li>
                            <ul>a. They can hoist themselves up into a standing position and may initiate cruising or take a few supported steps.</ul>
                            <ul>b. They may be able to crawl efficiently or even start experimenting with crawling upstairs (although this should be closely watched).</ul>
                            <li><b>2.	Language and Communication:</b></li>
                            <ul>a. They understand more words and simple instructions, although they may not speak many words themselves.</ul>
                            <ul>b. They may use gestures such as pointing or waving to express their needs or interests.</ul>
                            <ul>c. Some may say single words like "mama" or "dada" with intent.</ul>
                            <li><b>3.	Cognitive Development:</b></li>
                            <ul>a. They participate in basic problem-solving, such as figuring out how to stack blocks or fit objects into containers.</ul>
                            <ul>b. They begin to comprehend object permanence  that is, the realisation that objects continue to exist even when they are no longer in sight.</ul>
                            <ul>c. They might mimic actions and investigate cause-and-effect relationships (such as dropping things to observe what happens).</ul>
                            <li><b>4.	Social and Emotional Development:</b></li>
                            <ul>a. They demonstrate growing interest in other children and might enjoy interactive games like peek-a-boo.</ul>
                            <ul>b. Around this age, separation anxiety could reach its highest point since they are more cognizant of their caregivers' disappearance.</ul>
                            <ul>c. When others are in distress, they may begin exhibiting empathy or concern.</ul>
                            <li><b>5.	Feeding: </b></li>
                            <ul>a. At this stage, they are probably expanding their diet amid a range of foods and textures. </ul>
                            <ul>b. They are likely to have certain preferences for some foods, and they may develop self-feeding skills, though they require help and supervision. </ul>
                            <li><b>6.	Sleep:</b></li>
                            <ul>a. The child is likely to be transitioning from multiple naps to a 1-2 long nap. Night sleep totals 11-12 hours. </ul>
                            <ul>b. Sleep patterns differ significantly among children, but it is recommended to stick to a regular sleep time routine. </ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
        <td>
        <p style="text-align: center; font-weight: bold;">12th Month</p>
        <table style="width: 100%; table-layout: fixed;">
                <tr>
                    <td>
                        <ul>
                            <li><b>1.	May be walking independently or with minimal support</b></li>
                            <ul>a. Conduct a complete physical examination to check for any musculoskeletal,neurological, or developmental issues that could be affecting the child's ability to walk.</ul>
                            <ul>b. Promote activities that encourage gross motor skills development like crawling, walking with minimal support, and providing age-appropriate toys and activities that encourage movements and exploration.</ul>
                            <li><b>2.	Begins to use simple gestures or words to communicate needs</b></li>
                            <ul>a. Promote the use of non-verbal communication methods like pointing, reaching, as well as gesturing to indicate needs or wants.</ul>
                            <ul>b. Provide toys and activities that encourage communication and social interaction, such as interactive books, toys with buttons or switches, and activities involving taking turns.</ul>
                            <li><b>3.	Begins to show interest in pretend play</b></li>
                            <ul>a. Provide a variety of toys and playthings that promote imaginative play, such as dolls, stuffed animals, play kitchen sets, play construction tools, or building blocks.</ul>
                            <ul>b. Respond positively to all initiatives at imaginary play, regardless of how small, to reinforce the child's efforts and promote further exploration.</ul>
                            <li><b>4.	Begins to imitate others actions</b></li>
                            <ul>a. Show the child how to imitate basic gestures and actions, like blowing kisses, waving, or clapping hands.</ul>
                            <ul>b. Encourage social interactions between children and adults in structured play environments, like daycare centers or playgroups, so they can observe and imitate what the others do.</ul>
                        </ul> 
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</textarea>

<input type="submit" name="create_interventions" value="Save">
</form>

<script src="https://cdn.tiny.cloud/1/hh66v9nxb8r5lqopiz2zr5m37mfer93964ycvrhwdbazox0d/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    height:'1000',
    width:'auto',
    table_sizing_mode: 'relative',
    table_default_attributes: {
    border: '5'
    },
    default_font_stack: [ '-apple-system', 'Arial' ],
    readonly: true
  });
  
</script>
<!-- <script>
  tinymce.init({
    selector: 'textarea',
    height:'1000',
    width:'auto',
    table_sizing_mode: 'relative',
    table_default_attributes: {
    border: '5'
    },
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate mentions tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | fontzie' ,
    default_font_stack: [ '-apple-system', 'Arial' ]
  });
  
</script> -->
</body>
</html>

<?php

// if(isset($_POST['create_interventions'])){

//     $interventions = $_POST['interventions'];
//     date_default_timezone_set("Asia/Manila");
//     $date = date('y-m-d');

//     $query_intervention = "INSERT INTO interventions (name,date_created,date_updated) VALUES ('$interventions','$date', '$date')";
//     $run_interventions = mysqli_query($conn,$query_intervention);

//     if($run_interventions){
//         echo "added intervention";
//     }else{
//         echo "error intervention" ;
//     }

// }

ob_end_flush();


?>