<section class="add-pet-detail">
	<div class="container custom-padding">
		<form method="post" action="<?php echo site_url('app/sitterprofile/save_pet_details'); ?>">
			<input type="hidden" name="pet_id" value="<?php echo $user_pet['id'] ?>">
			<div class="add-pet-profile">
				<h2>Tell us about your pet </h2>
				<div class="image-upload"></div>
			</div>
			<div class="pet-details">
				<div class="add-pet-logo">
					<div class="pet-logo">
						<img src="<?php echo site_url('/assets/img/me.png') ?>" style="height: 30px;">	
					</div>
					<h2>Pet details </h2>
				</div>
				<p>Provide a description of your pet</p>
				<div class="radio-toolbar">
					<p>What type of pet?</p>
				    <input type="radio" id="radio1" name="pet_type" value="0" <?php echo ($user_pet['pet_type'] == '0')? 'checked' :'' ?> >
	                <label for="radio1"><span class="icon"><i class="fas fa-dog"></i></span><br><span class="service-list">Dog</span></label>

	                <input type="radio" id="radio2" name="pet_type" value="1" <?php ($user_pet['pet_type'] == '1')? 'checked' :'' ?> >
	                <label for="radio2"><span class="icon"><i class="fas fa-dog"></i></span><span class="service-list">Cat</span></label>
			    </div>
			    <div class="pet-name-weight">
					<div class="pet-name">
						<label for="name-element">Name</label>
						<div class="TargetWrapper">
							<input type="text" name="pet_name" required value="<?php echo $user_pet['pet_name'] ?>">
						</div>
					</div>
					<div class="pet-weight">
						<label for="weight-element">Weight</label>
						<div class="TargetWrapper">
							<input type="text" name="pet_weight" value="<?php echo $user_pet['pet_weight'] ?>" >
						</div>
					</div>			    	
			    </div>
			    <div class="add-pets-form">
			    	<div class="add-pet-age" style="display:flex;">
			    		<div class="pet-age-yr" style="display:flex;">
				    		<label for="age-years">Age(Yr.)</label>
							<div class="TargetWrapper">
								<input type="number" name="pet_age_yr" placeholder="Years"  value="<?php echo $user_pet['pet_age_yr'] ?>">
							</div>
						</div>
						<div class="pet-age-mo">
				    		<label for="age-months">Age(Mo.)</label>
							<div class="TargetWrapper">
								<input aria-label="age-months" type="pet_age_month" name="pet_age_month" placeholder="Months" value="<?php echo $user_pet['pet_age_month'] ?>">
							</div>
						</div>
			    	</div>
			    	<div class="add-pet-gender" style="display:flex;">
			    		<div class="gender-wrapper">
			    			<label for="gender-element">Sex</label>
			    			<div class="selectbutton">
			    				<input type="radio" name="pet_sex" aria-required="false" aria-checked="true" aria-label="Male" value="0" <?php echo ($user_pet['pet_sex'] == '0')? 'checked' :'' ?> >Male
			    				<input type="radio" name="pet_sex" aria-required="false" aria-checked="false" aria-label="Female" class="SelectButton__StyledHiddenInput-sc-16fa4qq-3 bdkIOy" value="1" <?php echo ($user_pet['pet_sex'] == '1')? 'checked' :'' ?> >Female	
		    			    </div>
		    			</div>
		    		</div>
			    </div>
			    <div class="form-wrapper">  
			    	<label for="breeds-element">Breed(s)</label>
			    	<div display="block" class="TargetWrapper__StyledTargetWrapper-c54yn0-0 bWJvH">
			    		<ul class="AutocompleteMultiSelect__BorderWrapper-sc-2yjpra-0 dtPnNq">
			    			<input id="breeds-element-id-39" type="text" name="pet_breed" data-qa-id="input-text-pet-breed" class="AsInput__Wrapper-f2icci-0 cRAZJu AutocompleteMultiSelect__StyledTextInput-sc-2yjpra-1 dBLLno" value="<?php echo $user_pet['pet_breed'] ?>" style="min-width: 0px;"><span aria-hidden="true" class="AutocompleteMultiSelect__ShadowSpan-sc-2yjpra-2 czrdVx"  ></span>
			    		</ul>
			    	</div>
			    </div>
			</div>
			<div class="add-pet-page">
				<h3>Additional details</h3>
				<div class="pets-details-form">
					<h4>Microchipped?</h4>
					<div class="SingleSelect">
						<label for="element-id-44">Yes
							<input type="radio" name="is_microchipped" id="element-id-44" value="0" <?php echo ($user_pet['is_microchipped'] == '0')? 'checked' :'' ?>>
							<div class="SelectPill-checkbox"></div>
						</label>
						<label for="element-id-45">No
							<input type="radio" name="is_microchipped" id="element-id-45" value="1" <?php echo ($user_pet['is_microchipped'] == '1')? 'checked' :'' ?>>
							<div class="SelectPill-check"></div>
						</label>
					</div>
				</div>

				<div class="pets-details-form">
					<h4>Spayed/Neutered</h4>
					<div class="SingleSelect">
						<label for="element-id-44">Yes
							<input type="radio" name="is_spayed_or_neutered" id="element-id-44" value="0">
							<div class="SelectPill-checkbox"></div>
						</label>
						<label for="element-id-45">No
							<input type="radio" name="is_spayed_or_neutered" id="element-id-45" value="1">
							<div class="SelectPill-check"></div>
						</label>
					</div>
				</div>

				<div class="pets-details-form">
					<h4>house_trained</h4>
					<div class="SingleSelect">
						<label for="element-id-58">Yes
							<input type="radio" name="house_trained" id="element-id-58" class="SelectPill" value="0">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-59">No
							<input type="radio" name="house_trained" id="element-id-59" value="1">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-60" class="SelectPill">Unsure
							<input type="radio" name="house_trained" id="element-id-60" value="2">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-61" class="SelectPill">Depends	
							<input type="radio" name="house_trained" id="element-id-61" value="3">
							<div class="SelectPill"></div>
						</label>
					</div>
				</div>

				<div class="pets-details-form">
					<h4>Friendly With Children</h4>
					<div class="SingleSelect">
						<label for="element-id-58">Yes
							<input type="radio" name="friendly_with_children" id="element-id-58" class="SelectPill" value="0">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-59">No
							<input type="radio" name="friendly_with_children" id="element-id-59" value="1">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-60" class="SelectPill">Unsure
							<input type="radio" name="friendly_with_children" id="element-id-60" value="2">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-61" class="SelectPill__Label-sc-15eva3v-0 ckinZS">Depends	
							<input type="radio" name="friendly_with_children" id="element-id-61" value="3">
							<div class="SelectPill"></div>
						</label>
					</div>
				</div>

				<div class="pets-details-form">
					<div>Friendly with dogs?</div>
					<div class="SingleSelect">
						<label for="element-id-58">Yes
							<input type="radio" name="friendly_with_dogs" id="element-id-58" class="SelectPil" value="0">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-59">No
							<input type="radio" name="friendly_with_dogs" id="element-id-59" value="1">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-60" class="SelectPill">Unsure
							<input type="radio" name="friendly_with_dogs" id="element-id-60" value="2">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-61" class="SelectPill">Depends	
							<input type="radio" name="friendly_with_dogs" id="element-id-61" value="3">
							<div class="SelectPill"></div>
						</label>
					</div>
				</div>
				<div class="pets-details-form">
					<div>Friendly With Cats?</div>
					<div class="SingleSelect">
						<label for="element-id-58">Yes
							<input type="radio" name="friendly_with_cats" id="element-id-58" class="SelectPill" value="0">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-59">No
							<input type="radio" name="friendly_with_cats" id="element-id-59" value="1">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-60" class="SelectPill">Unsure
							<input type="radio" name="friendly_with_cats" id="element-id-60" value="2">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-61" class="SelectPill__Label-sc-15eva3v-0 ckinZS">Depends	
							<input type="radio" name="friendly_with_cats" id="element-id-61" value="3">
							<div class="SelectPill"></div>
						</label>
					</div>
				</div>
				<div class="about-your-pet">
					<div class="title">
						<h3>About your pet</h3>
					</div>
					<div class="TargetWrapper">
						<textarea id="-element-id-74" placeholder="Add a description of your pet" class="" name="about_pet"></textarea>
					</div>
				</div>
			</div>
			<div class="care-info">
				<h2>Care info</h2>
				<p>Provide your sitter with instructions for walking, feeding and other care</p>
				<div class="pets-details-form">
					<div>Potty break schedule</div>
					<div class="SingleSelect">
						<label for="element-id-11">Every Hour
							<input type="radio" name="potty_break_schedule" id="element-id-58" class="SelectPill fcCZHd" value="0">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-12">2hour
							<input type="radio" name="potty_break_schedule" id="element-id-59" value="1">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-13" class="SelectPill">4hours
							<input type="radio" name="potty_break_schedule" id="element-id-60" value="2">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-14" class="SelectPill">8hours	
							<input type="radio" name="potty_break_schedule" id="element-id-61" value="3">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-15" class="SelectPill">custom	
							<input type="radio" name="potty_break_schedule" id="element-id-61" value="4">
							<div class="SelectPill"></div>
						</label>
					</div>
				</div>
				<div class="pets-details-form">
					<div>Energy Level</div>
					<div class="SingleSelect">
						<label for="element-id-16">High
							<input type="radio" name="energy_level" id="element-id-58" class="SelectPill" value="0">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-17">Moderate
							<input type="radio" name="energy_level" id="element-id-59" value="1">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-18" class="SelectPill">Low
							<input type="radio" name="energy_level" id="element-id-60" value="2">
							<div class="SelectPill"></div>
						</label>
					</div>
				</div>
				<div class="pets-details-form">
					<div>Feeding schedule</div>
					<div class="SingleSelect">
						<label for="element-id-19">Morning
							<input type="radio" name="feeding_schedule" id="element-id-58" class="SelectPill" value="0">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-20">Twice
							<input type="radio" name="feeding_schedule" id="element-id-59" value="1">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-21" class="SelectPill">Custom
							<input type="radio" name="feeding_schedule" id="element-id-60" value="2">
							<div class="SelectPill"></div>
						</label>
					</div>
				</div>
				<div class="pets-details-form">
					<div>Can be left alone</div>
					<div class="SingleSelect">
						<label for="element-id-22">< 1 hour
							<input type="radio" name="can_be_left_alone" id="element-id-58" class="SelectPill" value="0">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-23">1-4 hour
							<input type="radio" name="can_be_left_alone" id="element-id-59" value="1">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-24" class="SelectPill">4 - 8 hour
							<input type="radio" name="can_be_left_alone" id="element-id-60" value="2">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-25" class="SelectPill">custom	
							<input type="radio" name="can_be_left_alone" id="element-id-61" value="3">
							<div class="SelectPill"></div>
						</label>
					</div>
				</div>
				<div class="pets-details-form">
					<div>Medication (select all that apply)</div>
					<div class="SingleSelect">
						<label for="element-id-19">Pill
							<input type="radio" name="medication" id="element-id-58" class="SelectPill" value="0">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-20">Topical
							<input type="radio" name="medication" id="element-id-59" value="1">
							<div class="SelectPill"></div>
						</label>
						<label for="element-id-21" class="SelectPill">Injection
							<input type="radio" name="medication" id="element-id-60" value="2">
							<div class="SelectPill"></div>
						</label>
					</div>
				</div>
				<div class="about-sitter">
					<div class="title">
						<h3>Anything else a sitter should know?</h3>
					</div>
					<div class="TargetWrapper">
						<textarea id="-element-id-74" placeholder="Add a description for walking, feeding, or other care." class="" name="anything_else_sitter"></textarea>
					</div>
				</div>
			</div>
			<div class="veterinary-information">
				<div class="main-title">
					<h3>Veterinary information</h3>
				</div>
				<p>Add your vets name, address, and phone number</p>
				<div class="title">
					<h3>Add your vet details</h3>
				</div>
				<div class="TargetWrapper">
					<textarea id="-element-id-74" placeholder="Add your vet's name, address, and phone number." class="" name="vet_details"></textarea>
				</div>
			</div>
			<div class="photo-gallery">
				<p>Show off your pet through photos</p>
				<div class="add-photos">
					
				</div>
			</div>
			<button type="submit" class="submit-button">
				<div display="flex" class="sc-bdL">
					<span size="200" font-weight="semibold" class="save-pet">Save pet</span>
				</div>
			</button>
		</form>
		<div display="flex" class="dont-have-pet">
			<span size="200" font-weight="semibold" class="no-pet">I don't have any pets</span>
		</div>
   </div>	
</section>

