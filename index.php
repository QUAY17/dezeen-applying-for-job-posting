<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8"/>
		<title>Dezeen</title>
	</head>
	<body>
		<header>
			<h1 align="center">APPLYING FOR A JOB ON DEZEEN</h1>
			</header>
		<main>
			<img src="images/jose.jpg" alt="jose' ferrufino" align="center" width="45%" height="50%">

			<h2 align="left">Persona:</h2>
				<p><b>Name</b>: Jos&eacute; Ferrufino<br></p>
				<p><b>Age</b>: 33</p>
				<p><b>Profession</b>: Luxury Product Design Professional</p>
			<p><b>Technology</b>:
				<ul>
				<li><b>MacPro Desktop</b> (work: design studio, updated IOS X Sierra)</li>
				<li><b>MacBook Pro</b> (home: newer model and updated IOS X Sierra, external hard drive)</li>
				<li><b>iPhone6s or higher</b> (mobile: IOS 10.2 with international data plan. Jose' travels a handful of times a year for work, was born in Montreal and has lived internationally for both school and work)</li>
				<li>Proficient in Windows, but in the design industry, Mac is preferred.</li>
			</ul>
				<p><b>Attitudes and Behaviors</b>:Seasoned young professional with over a decade of experience in luxury product design. Not applying for jobs below his salary or expectation scope. Works internationally; has been employed in New York, Paris, and Lasaunne, Switzerland. Elevated sensibility.</p>
				<p><b>Frustrations and Needs</b>:Jose' is not looking to be hired in any other market aside from the luxury niche. He is not looking to work for a startup either (except his own, "Les Chardons-Bleus" which is located in Paris- working with his team on his own time). Salary expectations must be met as well as product expectations. Seeking "long-term" with growth potential, new contracts, expansion, etc.</p>
			<p><b>Main Goal</b>:
				Landing a full-time, high-end design position in the US, Europe, or Asia which will be "home" for at least 3 years. Currently residing in Brooklyn, relocation is a welcomed option and will be considered given the appropriate remuneration. As previously stated, emphasis on vertical growth potential within the company.</p>

		<h3>Use Case: How & Why</h3>
			<p>Jos&eacute; will use Dezeen to search for job opportunities, filter through positions meaningful to his career scope, and then apply directly to potential employers.</p>

		<h3>Interaction Flow: Specific Steps</h3>
				<ol>
					<li>Jos&eacute; opens Chrome on his MacBook and visits <a href="https://www.dezeenjobs.com">Dezeen Jobs</a></li>
					<li>Dezeen displays list of job opportunities in chronological order (most recently posted)</li>
					<li>Jos&eacute; scrolls through jobs and selects most fitting listing (by clicking on job title link)</li>
					<li>Dezeen displays the selected full job description which contains the direct email of hiring personnel</li>
					<li>Jos&eacute; submits all applicant requirements to said employer email (cover letter, portfolio, website, etc.)</li>
					<li>Employer receives Jose's submission, is "wow'd" by his accomplishments and sets up an interview</li>
					<li>Jos&eacute; is pleased and drinks champagne in anticipation of getting a great new job! Lives happily ever after...</li>
				</ol>
			<h3>Entities & Attributes</h3>
				<ul><b>PROFILE</b>
						<li>profileId (primary key)</li>
						<li>profileName</li>
						<li>profileEmail</li>
						<li>profileWebsite</li>
				</ul>
				<ul><b>JOB POST</b>
					<li>jobPostProfileId (foreign key)</li>
					<li>jobPostDate</li>
					<li>jobPostContent</li>
					<li>jobPostLinktoApplication</li>
				</ul>
				<ul>
					<b>APPLY</b>
					<li>applyContent</li>
					<li>applyLink</li>
					<li>applyEmail</li>
				</ul>
			<h3>Relations</h3>
			<ul>
				<li>One <b>USER</b> can have one <b>PROFILE (1 - n)</b></li>
				<li>One <b>JOB POST</b> can have many <b>VIEWS (m - n)</b></li>
				<li>Many <b>PROFILES</b> can apply to many <b>JOB POSTINGS (m - n)</b></li>
			</ul>

		</main>
		</body>
</html>
