<div class="gtco-section">
	<div class="gtco-container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 gtco-heading">
				<h2 class="cursive-font primary-color text-center">口座開設お申込み</h2>

				<?php echo $this->Form->create(null,[
					'type' => 'post',
					'url' => [
						'controller' => 'member',
						'action' => 'register',
					],
					'id' => 'register',
					'inputDefaults' => [
						'label' => false,
						'div' => false,
					],
					'novalidate' => 'false',
				]); ?>

				<div class="col-md-12 col-sm-8 col-sm-offset-2 col-md-offset-0 contact-frame">
					<div class="contact-form col-md-12">
						<div class="col-md-4 field-name">
							<div>名前（全角） <span>必須</span></div>
						</div>
						<div class="col-md-4 field-input">
			            	<?= $this->Form->control('family_name', [
			            		'type' => 'text',
			            		'maxlength' => 8,
			            		'placeholder' => "姓",
			            		'label' => false,
			            		'class' => 'form-control required',
			            		'templates' => [
			            			'inputContainer' => '{{content}}'
							    ],
							    
			            	]) ?>
			            	<?php echo $this->Flash->render('family_name'); ?>
						</div>
						<div class="col-md-4 field-input">
							<?= $this->Form->control('first_name', [
			            		'type' => 'text',
			            		'maxlength' => 8,
			            		'placeholder' => "名",
			            		'label' => false,
			            		'class' => 'form-control required',
			            		'templates' => [
			            			'inputContainer' => '{{content}}'
							    ],
			            	]) ?>
			            	<?php echo $this->Flash->render('first_name'); ?>
						</div>
					</div>

					<div class="contact-form col-md-12">
						<div class="col-md-4 field-name">
							<div>フリガナ（全角） <span>必須</span></div>
						</div>
						<div class="col-md-4 field-input">
			            	<?= $this->Form->control('family_name_kana', [
			            		'type' => 'text',
			            		'maxlength' => 17,
			            		'placeholder' => "セイ",
			            		'label' => false,
			            		'class' => 'form-control required',
			            		'templates' => [
			            			'inputContainer' => '{{content}}'
							    ],
			            	]) ?>
			            	<?php echo $this->Flash->render('family_name_kana'); ?>
						</div>
						<div class="col-md-4 field-input">
							<?= $this->Form->control('first_name_kana', [
			            		'type' => 'text',
			            		'maxlength' => 17,
			            		'placeholder' => "メイ",
			            		'label' => false,
			            		'class' => 'form-control required',
			            		'templates' => [
			            			'inputContainer' => '{{content}}'
							    ],
			            	]) ?>
			            	<?php echo $this->Flash->render('first_name_kana'); ?>
						</div>
					</div>

					<div class="contact-form col-md-12">
						<div class="col-md-4 field-name">
							<div>性別 <span>必須</span></div>
						</div>
						<div class="col-md-8 field-radio">
			            	<?= $this->Form->control('gender', [
			            		'type' => 'radio',
			            		'options' => $Member->register->gender,
			            		'label' => false,
			            		// 'class' => 'form-control',
			            		'templates' => [
			            			'inputContainer' => '{{content}}'
							    ],
			            	]) ?>
			            	<?php echo $this->Flash->render('gender'); ?>
						</div>
					</div>

					<div class="contact-form col-md-12">
						<div class="col-md-4 field-name">
							<div>生年月日 <span>必須</span></div>
						</div>
						<div class="col-md-8 field-input">
			            	<?= $this->Form->control('birthdate', [
								'type' => 'date',
								'dateFormat' => 'YMD',
								'monthNames' => false,
								'label' => false,
								// 'class' => 'form-control',
								'maxYear' => date('Y'),
								'minYear' => 1900,
								'orderYear' => 'desc',
								'empty' => [
									'year' => '年',
									'month' => '月',
									'day' => '日',
								],
			            		'templates' => [
			            			'inputContainer' => '{{content}}'
							    ],
			            	]) ?>
			            	<?php echo $this->Flash->render('birthdate'); ?>
						</div>
					</div>

					<div class="contact-form col-md-12">
						<div class="col-md-4 field-name">
							<div>メールアドレス <span>必須</span></div>
						</div>
						<div class="col-md-8 field-input">
			            	<?= $this->Form->control('mail', [
			            		'type' => 'text',
			            		'placeholder' => "例）example@nihoncs.com",
			            		'label' => false,
			            		'class' => 'form-control required',
			            		'templates' => [
			            			'inputContainer' => '{{content}}'
							    ],
			            	]) ?>
			            	<?php echo $this->Flash->render('mail'); ?>
						</div>
					</div>

					<div class="contact-form col-md-12">
						<div class="col-md-4 field-name">
							<div>確認用メールアドレス <span>必須</span></div>
						</div>
						<div class="col-md-8 field-input">
			            	<?= $this->Form->control('mail_confirm', [
			            		'type' => 'text',
			            		'placeholder' => "例）example@nihoncs.com",
			            		'label' => false,
			            		'class' => 'form-control required',
			            		'templates' => [
			            			'inputContainer' => '{{content}}'
							    ],
			            	]) ?>
						</div>
					</div>

					<div class="contact-form col-md-12">
						<div class="col-md-4 field-name">
							<div>電話番号 <span>必須</span></div>
						</div>
						<div class="col-md-5 field-input">
			            	<?= $this->Form->control('tel', [
			            		'type' => 'text',
			            		'placeholder' => "例）0362620991",
			            		'label' => false,
			            		'class' => 'form-control required',
			            		'templates' => [
			            			'inputContainer' => '{{content}}'
							    ],
			            	]) ?>
			            	<?php echo $this->Flash->render('tel'); ?>
						</div>
					</div>

					<div class="contact-form col-md-12">
						<div class="col-md-4 field-name">
							<div>郵便番号 <span>必須</span></div>
						</div>
						<div class="col-md-5 field-input">
			            	<?= $this->Form->control('zip', [
			            		'type' => 'text',
			            		'placeholder' => "例）1030022",
			            		'label' => false,
			            		'class' => 'form-control required',
			            		'id' => 'zip',
			            		'templates' => [
			            			'inputContainer' => '{{content}}'
							    ],
			            	]) ?>
			            	<?php echo $this->Flash->render('zip'); ?>
						</div>
					</div>

					<div class="contact-form col-md-12">
						<div class="col-md-4 field-name field-address">
							<div>住所（全角） <span>必須</span></div>
						</div>
						<div class="col-md-8">
							<div class="col-md-3 address-name">
				            	都道府県
							</div>
							<div class="col-md-9 field-input">
								<?= $this->Form->control('address_prefecture', [
				            		'type' => 'text',
				            		'maxlength' => 8,
				            		'label' => false,
				            		'class' => 'form-control required',
				            		'id' => 'address_prefecture',
				            		'templates' => [
				            			'inputContainer' => '{{content}}'
								    ],
				            	]) ?>
				            	<?php echo $this->Flash->render('address_prefecture'); ?>
							</div>
							<div class="col-md-3 address-name">
			            		市区郡
							</div>
							<div class="col-md-9 field-input">
								<?= $this->Form->control('address_city', [
				            		'type' => 'text',
				            		'maxlength' => 16,
				            		'label' => false,
				            		'class' => 'form-control required',
				            		'id' => 'address_city',
				            		'templates' => [
				            			'inputContainer' => '{{content}}'
								    ],
				            	]) ?>
				            	<?php echo $this->Flash->render('address_city'); ?>
							</div>
							<div class="col-md-3 address-name">
				            	町村名・番地
							</div>
							<div class="col-md-9 field-input">
								<?= $this->Form->control('address_town', [
				            		'type' => 'text',
				            		'maxlength' => 16,
				            		'label' => false,
				            		'class' => 'form-control required',
				            		'id' => 'address_town',
				            		'templates' => [
				            			'inputContainer' => '{{content}}'
								    ],
				            	]) ?>
				            	<?php echo $this->Flash->render('address_town'); ?>
							</div>
							<div class="col-md-3 address-name">
				            	建物名等
							</div>
							<div class="col-md-9 field-input">
								<?= $this->Form->control('address_building', [
				            		'type' => 'text',
				            		'maxlength' => 32,
				            		'label' => false,
				            		'class' => 'form-control',
				            		'id' => 'address_building',
				            		'templates' => [
				            			'inputContainer' => '{{content}}'
								    ],
				            	]) ?>
				            	<?php echo $this->Flash->render('address_building'); ?>
							</div>
						</div>
					</div>

					<div class="contact-form col-md-12">
						<div class="col-md-4 field-name field-address">
							<div>住所フリガナ（全角） <span>必須</span></div>
						</div>
						<div class="col-md-8">
							<div class="col-md-3 address-name">
				            	<span>都道府県（カナ）</span>
							</div>
							<div class="col-md-9 field-input">
								<?= $this->Form->control('address_prefecture_kana', [
				            		'type' => 'text',
				            		'maxlength' => 16,
				            		'label' => false,
				            		'class' => 'form-control required',
				            		'id' => 'address_prefecture_kana',
				            		'templates' => [
				            			'inputContainer' => '{{content}}'
								    ],
				            	]) ?>
				            	<?php echo $this->Flash->render('address_prefecture_kana'); ?>
							</div>
							<div class="col-md-3 address-name">
			            		<span>市区郡（カナ）</span>
							</div>
							<div class="col-md-9 field-input">
								<?= $this->Form->control('address_city_kana', [
				            		'type' => 'text',
				            		'maxlength' => 32,
				            		'label' => false,
				            		'class' => 'form-control required',
				            		'id' => 'address_city_kana',
				            		'templates' => [
				            			'inputContainer' => '{{content}}'
								    ],
				            	]) ?>
				            	<?php echo $this->Flash->render('address_city_kana'); ?>
							</div>
							<div class="col-md-3 address-name">
				            	<span>町村名・番地（カナ）</span>
							</div>
							<div class="col-md-9 field-input">
								<?= $this->Form->control('address_town_kana', [
				            		'type' => 'text',
				            		'maxlength' => 32,
				            		'label' => false,
				            		'class' => 'form-control required',
				            		'id' => 'address_town_kana',
				            		'templates' => [
				            			'inputContainer' => '{{content}}'
								    ],
				            	]) ?>
				            	<?php echo $this->Flash->render('address_town_kana'); ?>
							</div>
							<div class="col-md-3 address-name">
				            	<span>建物名等（カナ）</span>
							</div>
							<div class="col-md-9 field-input">
								<?= $this->Form->control('address_building_kana', [
				            		'type' => 'text',
				            		'maxlength' => 32,
				            		'label' => false,
				            		'class' => 'form-control',
				            		'id' => 'address_building_kana',
				            		'templates' => [
				            			'inputContainer' => '{{content}}'
								    ],
				            	]) ?>
				            	<?php echo $this->Flash->render('address_building_kana'); ?>
							</div>
						</div>
					</div>


					<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3 button" style="margin-top:24px;">
						<?php echo $this->Form->submit('内容確認へ', [
							'class' => 'button',
						]); ?>
					</div>

				</div>

				<?php echo $this->Form->end(); ?>

			</div>
		</div>

	</div>
</div>