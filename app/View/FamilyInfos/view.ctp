<div class="row">
<div class="col-md-3"></div>
<div class="col-md-5">
<h4 class="text-center">................... गाउ बिकाश समिति</h4>
<h3 class="text-center">गाउको बस्तु स्थितिको लागि घरधुरी सर्वेक्षण फारम  </h3>

</div>
<div class="col-md-3"></div>

</div>
<!-- end top section -->
<!-- family info -->
<div class="row">

<table class="table table-bordered" width="100%">
<tr>
<td>वडा नं </td>
<td><?php echo $familyInfo['FamilyInfo']['ward_no']; ?></td>
<td>वस्ती क्रम संख्या (कोड)</td>
<td><?php echo $familyInfo['FamilyInfo']['residential_code']; ?></td>
<td>वस्तीको नाम</td>
<td><?php echo $familyInfo['FamilyInfo']['resident_name']; ?></td>
<td>घर न.  </td>
<td><?php echo $familyInfo['FamilyInfo']['house_no']; ?></td>

</tr>
<!-- oda no 1 -->
<tr class="vertical-text">


<td>घर मुलीको नाम </td>
<td><?php echo $familyInfo['FamilyInfo']['house_owner']; ?></td>

<td>बालक </td>
<td></td>
<td>घरमुली</td>

<td colspan="3"><?php echo $familyInfo['FamilyInfo']['house_owner_type']; ?></td>

</tr>

<!-- end oda no 1-->


<!-- oda no 1 -->
<tr>
<td>जाति</td>
<td><?php echo $familyInfo['FamilyInfo']['caste']; ?></td>
<td>धर्म</td>
<td><?php echo $familyInfo['FamilyInfo']['religion']; ?></td>

<td>मात्रीभाषा</td>
<td colspan="3"><?php echo $familyInfo['FamilyInfo']['language']; ?></td>

</tr>



<!-- end oda no 1-->



</table>

</div>

<div class="row">
<div class="col-md-6 col-xs-offset-2">
<table class="table table-bordered"width="100%">
<tr>
<th>Ages Group</th>
<th>Male</th>
<th>Female</th>
<th>Total</th>
</tr>

<strong>Family Members No.</strong>
<?php foreach($familyInfo['FamilyMemberInfo'] as $familyMemberInfo){ ?>
<tr>
<td><?php echo $familyMemberInfo['FamilyAgeGroup']['name']; ?></td>
<td><?php echo $familyMemberInfo['male'];?></td>
<td><?php echo $familyMemberInfo['female'];?></td>
<td><?php echo $familyMemberInfo['male']+ $familyMemberInfo['female'];?></td>
</tr>
<?php } ?>

</table>
</div>
</div>
<!-- end family info -->
