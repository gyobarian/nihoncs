<div class="gtco-section">
	<div class="gtco-container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 gtco-heading">
				<h2 class="cursive-font primary-color text-center">お申込内容確認</h2>
				<?php echo $this->Form->create(null,[
					'type' => 'post',
					'url' => [
						'controller' => 'member',
						'action' => 'registerComplete',
					],
					'id' => 'register',
					'inputDefaults' => [
						'label' => false,
						'div' => false,
					],
					'novalidate' => 'false',
				]); ?>

					<?php echo $this->Form->button('戻る', [
						'type' => 'button',
						'onclick' => 'history.back()',
					]); ?>
					<?php echo $this->Form->submit('上記内容で申し込む', [
						'class' => 'button',
					]); ?>

				<?php echo $this->Form->end(); ?>
			</div>
		</div>

	</div>
	