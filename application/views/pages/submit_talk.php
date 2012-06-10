<div class="span12">
    <div class="padded-element">
        <h2>Submit a talk!</h2>
        <p class="subtitle">(Talk about a technology you are really passionate about. Can be anything.)</p>

        <?php echo form_open(site_url('pages/submit_talk'), array('class'=>'form-vertical')) ?>
        <fieldset>
            <?php $str = form_error('title'); ?>
            <div class="control-group<?php echo ($str == NULL)?'':' error'?>">
                <div class="controls">
                    <label for="title">Title *</label>
                    <input type="title" class="input-xlarge" id="title" name="title" placeholder="Enter the talk's title here" value="<?php echo set_value('title', isset($talk['title'])?$talk['title']:''); ?>" tabindex="1"><br />
                    <?php echo ($str == NULL)?'':'<span class="help-inline">'.$str.'</span>'?>
                </div>
            </div>

            <?php $str = form_error('talk-description'); ?>
            <div class="control-group<?php echo ($str == NULL)?'':' error'?>">
                <div class="controls">
                    <label for="talk-description">Description of the talk *</label>
                    <textarea name="talk-description" id="talk-description" tabindex="2"><?php echo set_value('talk-description', isset($talk['talk-description'])?$talk['talk-description']:''); ?></textarea><br />
                    <?php echo ($str == NULL)?'':'<span class="help-inline">'.$str.'</span>'?>
                </div>
            </div>

            <?php $str = form_error('speaker-name'); ?>
            <div class="control-group<?php echo ($str == NULL)?'':' error'?>">
                <div class="controls">
                    <label for="speaker-name">Speaker Name *</label>
                    <input type="speaker-name" class="input-xlarge" id="speaker-name" name="speaker-name" placeholder="Enter your real name here" value="<?php echo set_value('speaker-name', isset($talk['speaker-name'])?$talk['speaker-name']:''); ?>" tabindex="3"><br />
                    <?php echo ($str == NULL)?'':'<span class="help-inline">'.$str.'</span>'?>
                </div>
            </div>

            <?php $str = form_error('email-address'); ?>
            <div class="control-group<?php echo ($str == NULL)?'':' error'?>">
                <div class="controls">
                    <label for="email-address">Email Address *</label>
                    <p class="sublabel">(Note! Your email address is collected to arrange the schedules when the vote results are out.<br />It will not be released to public without your permission)</p>
                    <input type="email-address" class="input-xlarge" id="email-address" name="email-address" placeholder="Enter your email address here" value="<?php echo set_value('email-address', isset($talk['email-address'])?$talk['email-address']:''); ?>" tabindex="4"><br />
                    <?php echo ($str == NULL)?'':'<span class="help-inline">'.$str.'</span>'?>
                </div>
            </div>

            <?php $str = form_error('twitter-handle'); ?>
            <div class="control-group<?php echo ($str == NULL)?'':' error'?>">
                <div class="controls">
                    <label for="twitter-handle">Twitter handle</label>
                    <input type="twitter-handle" class="twitter-input input-xlarge" id="twitter-handle" name="twitter-handle" placeholder="geekcamp" value="<?php echo set_value('twitter-handle', isset($talk['twitter-handle'])?$talk['twitter-handle']:''); ?>" tabindex="4"><br />
                    <?php echo ($str == NULL)?'':'<span class="help-inline">'.$str.'</span>'?>
                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn">Register talk now!</button>
        </form>
    </div>
</div>