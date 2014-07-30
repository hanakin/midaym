# Frameing Mino <small>Responsive, SMACSS, Bare-Bone, Bootstrap 3.0</small>
- Michael Miday
- midaym
- 2013-07-24
- Web
- yellow
- published

When coming up with the best solution for working with the front-end devlopment of a major web application, there are alot of factors to take into account. By establishing the requirments for both devlopment and releaseability. We can then begin to determine what is needed out of a front-end workflow. Once we establish the workflow we can determine what best way to utilize a framework. Can we use one of the existing ones? Do we need to build our own fully tailor framework? Can we customize an existing one to fit our needs. These are the major questions that I wayed when determining the best approach to utilizing a framework.

## Framework Requirments
To better allow me to answer the framework quetion I needed to define the devlopment modal for the themes. This was tricky as their is alot changing with PHPBB at the moment in the dev community. Their were a few things that stood out as major requirments however.

1. LESS
2. Responsive Grid Approach - best implimentation for our purposes
3. SMACSS
	1. Scaleable file structure
	2. Modular Component Files(ie: buttuns.less, labels.less, etc..)
4. Seperation - seperation of framework core files from build files

## The Result
With these requirments I finally settled upon a customized scaled down version of [BS3][1]. The file structure is completely unique to the theme but the core of it utilizes several compnets of [BS3][1]. Mostly the structure and base stuff but also some of the core functionality for some of its components.

#### The Devlopment File Structure
The structure is broken into a three tier development process the **Framework**, **Core**, & **Theme**

- ##### **Framework** 
	- This consists of the modified [BS3][1] less files
		- _variables.less
		- _mixins.less
		- **Global**
		- _normalize.less
		- _base.less
		- _type.less
		- _code.less
		- _tables.less
		- _forms.less
		- **Structure**
		- _responsive.less
		- _grid.less
		- **Modules**
		- individual module core functionality

- ##### **Core** 
	- This is essentially used to set the baseline or barebone styles
		- global.less
			- This serves as normalizing and setting up default type and element styles at the core level to build upon. This will serve as the primary file in a bare-bone theme
		- core-structure.less
			- This will establish the layout of the theme. This gives us the grid and responsive utilities as well as some default structural styles to build off of
		- core-modules.less
			- This is used to customize the modules ported from bootstrap and allow for further definition of the defaults for them.

- ##### **Theme** 
	- This consists of 3 additional less files that do all the heavy lifting for generating the final css files that correspond directly to these files.
		- structure.less
			- This allows for theme specific layout styling
		- theme.less
			- This allows for theme specific styles.

#### The Deployment Files
The end result that is served to the application consists of 4 files.

- stylesheet.css - This is leveraged the same way as it currently is to merge all the files together.
	- global.css
		- This is the rendered core global css rules
	- structure.css
		- This is the rendered layout for the theme
	- theme.css
		- This is all the rendered theme specific rules


#### Articles in This Series Series
*	[In the Begining][artice1] 
*	[Style the Guidelines [Design Creation]][article2]
*	[Frameing Mino][article3]
*	Rapid Prototyping [XHTML Prototyping]
*	The Flavour 
*	Tweak & Polish 
*	Seperation Anxiety
*	Template Temptation
*	jHancing
*	Bench
*	Deployment!

[artice1]: http://www.midaym.com/new-themeing-project
[article2]: http://www.midaym.com/style-the-guidelines
[article3]: http://www.midaym.com/frameing-mino

[1]: https://github.com/twitter/bootstrap/tree/3.0.0-wip       "Bootstrap 3.0"