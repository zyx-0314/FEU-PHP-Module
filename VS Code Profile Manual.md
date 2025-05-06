# Setting up: VS profile

## Setup Git
1. [Download git.](https://git-scm.com/downloads) in `Browser`
2. Install, just press next and/or install.(note:no need to tweak any if you don't understand)
3. After installation, uncheck all check box
4. git config:
    1. Open `cmd`
    2. Check if it properly installed: `git --version`
        - you can re-download and install or restart pc
    3. Make your local device signature author username: `git config --global user.name yourUserNameHere`
    4. Check your local device signature author username: `git config --global user.name`
    5. Log your local device email connecting your github: `git config --global user.email yourEmailHere@email.com`
    6. Check your local device logged email: `git config --global user.email`

## Setup Wakatime
1. In `Browser` check the [Wakatime page](https://wakatime.com/dashboard).
2. Login or make an account using github
3. In your top right your `profile image`, click and find the `settings`
4. Copy `API key`
5. In your `VS Code`
6. Using `ctrl` + `shift` + `p` in your keyboard a specific function search will appear at top with `>` inside.
    - dont delete the `>`
7. Type `api key`
8. Select `Wakatime: API Key`
9. Paste the copied API key erlier
10. restart pc

## Setup Nau Time
1. Click the `nau icon` bottom right of your `VS Code`
    - try to hove icons and look for the tooltip of `nau time`
2. Click the `follow link`
3. Login to your github or make account
4. Add me as your friend in the friend tab. `ramirezian037@gmail.com`
5. You can also add your `friends`

## Using Five Server with XAMPP
1. Install XAMPP
2. Turn on XAMPP
    - `Start` Apache
3. Install Profile
    1. Click the `Settings` or `Gear Icon`
    2. Click `Profile` and `Profiles`
    3. Beside `New Profile` click the `arrow pointing down icon`
    4. Click `Import Profile`
    5. Select file then find your profile to import
4. Setup the extensions:
    1. Open `Settings` of `VS Code`
    2. Search for `five`
    3. Check the checkbox of `Five Server: Inject Body`, `Five Server: Navigate`
    4. Set the value of `Five Server › PHP: Executable` with `C:\\xampp\\php\\php.exe`
        - if you installed your xampp in different directory, then look for its root and change the `C:\\xampp\\php`
    5. Set the value of `Five Server › PHP: Ini` with `C:\\xampp\\php\\php.ini`
    6. Change the value of `Five Server: Port` to different port but make sure in range of `3000` - `9999`.
        - if its not working when you run the live server change it
    7. Run `five server` by looking for the icon bottom right with `Go Live` or with tooltip of `five server`

## Using Todo
1. Inside your code add comment then add `TODO <Task name>`
2. Click on the side panel the `logo of tree` or tooltip `TODO` you can see all your notes there
Other Tags:
- `BUG`
- `HACK`
- `FIXME`
- `XXX`
- `[ ]`
- `[X]`

## Using Polacode
1. Using `ctrl` + `shift` + `p` in your keyboard a specific function search will appear at top with `>` inside.
    - dont delete the `>`
2. Type `polacode` and select `polacode`, a new window will appear
3. Highlight the code you wanna share or submit
4. The `Camera Icon` can e used to save the image or `ctrl` + `c`

## Adding Snippets
1. Using `ctrl` + `shift` + `p` in your keyboard a specific function search will appear at top with `>` inside.
    - dont delete the `>`
2. Type `Snippets` and select `Snippets: Configure Snippets`.
3. Select the `HTML`
4. Add your New Snippet:
(Format)
```json
{
	"Add PHP Tag": {
		"prefix": "phpt",
		"body": [
			"<?php",
			"$1",
			"?>"
		],
		"description": "This add php tag to my html"
	}
}
```
Notes: `$n` states that that would be edited. `n` is the state number