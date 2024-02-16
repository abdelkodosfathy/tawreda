import Section from '../items/Section';
import Slider from '../items/Slider';
export default function Home() {
console.log("home")
  return(
    <>
    <div id="Home">
      <Slider/>
      <div className="sections">
        <Section type="electric">ادوات كهربائية</Section>
        <Section type="pumbling">ادوات صحية</Section>
      </div>
    </div>
    </>
  );
}
