import Footer from './subs/Footer';
import Header from './subs/Header';
import hero from '../assets/hero.svg';
import star from '../assets/star.svg';
import home1 from '../assets/home1.svg';
import home2 from '../assets/home2.svg';
import home3 from '../assets/home3.svg';
import home4 from '../assets/home4.svg';
import home5 from '../assets/home5.svg';
import home6 from '../assets/home6.svg';
import icon1 from '../assets/icons/icon1.svg';
import icon2 from '../assets/icons/icon2.svg';
import icon3 from '../assets/icons/icon3.svg';
import icon4 from '../assets/icons/icon4.svg';
import icon5 from '../assets/icons/icon5.svg';
import bg from '../assets/bg.svg';
import ai from '../assets/ai.svg';
import { useRef, useState } from 'react';
import herobg from '../assets/herobg.svg';
import herobg2 from '../assets/homebg2.svg';

export default function Home() {
  const ref = useRef(null);
  const [pos, setPos] = useState(0);
  function scroll(scrollPercentage) {
    const container = ref.current;
    const containerWidth =
      container.scrollWidth - container.clientWidth;
    const scrollOffset = (scrollPercentage / 100) * containerWidth;
    setPos(pos + scrollOffset);
    container.scrollLeft += scrollOffset;
  }
  return (
    <div>
      <Header />
      <section
        className="px-5 md:px-20 min-h-[100vh] pt-10 md:pt-20 flex flex-col justify-center items-center gap-8 text-center bg-contain bg-center bg-no-repeat"
        style={{ backgroundImage: `url(${herobg})` }}
      >
        <h2 className="text-2xl md:text-[48px] leading-normal text-dark font-[700]">
          Get Ready for a Game-Changing{' '}
          <br className="hidden md:block" />{' '}
          <span className="text-primary inline">
            {' '}
            <img src={ai} className="inline h-10 md:h-14" alt="" /> AI
            Powered
          </span>{' '}
          Food and Grocery <br className="hidden md:block" />
          Delivery Platform
        </h2>
        <p className="text-light md:text-xl">
          GoGrocer is an AI food delivery platform that is providing
          users with a convenient way{' '}
          <br className="hidden md:block" /> to access food and
          grocery essentials. Join waitlist to get early access.
        </p>
        {/* <label className="md:w-1/2 flex gap-2 items-center justify-center">
          <input
            type="text"
            placeholder="Enter Email Address"
            className="bg-inherit w-full h-10 md:h-12 px-5 border outline-none placeholder:text-[] placeholder:text-sm"
          />
          <button className="text-white min-w-fit h-10 md:h-12 px-4 md:px-8 font-[500] bg-primary outline-none">
            Join waitlist
          </button>
        </label> */}
        <img src={hero} alt="" />
      </section>
      <section className="bg-[#F9F9F9] flex flex-col py-20 px-5 md:px-20 items-center gap-12 md:gap-24 z-[0] relative">
        <img
          src={herobg2}
          alt=""
          className="absolute w-full h-full top-0 bottom-10 left-0 object-cover z-[-1]"
        />
        <div className="w-full flex flex-col-reverse md:flex-row gap-10 md:gap-0 items-center z-10">
          <div className="md:w-1/2 flex flex-col gap-4 md:gap-8 ">
            <h4 className="text-dark text-2xl md:text-[40px] font-[600]">
              Real-time Tracking System
            </h4>
            <p className="text-light">
              Our AI delivery solution is integrated with Google maps.
              With this feature, our customers can track and monitor
              the progress of their orders. Automated notifications
              will be sent to customers regarding estimated delivery
              times, updates, or delays.
            </p>
            <ul className="flex flex-col gap-4 text-light">
              <li className="flex items-center gap-2">
                <img src={star} alt="" />
                Monitor the progress of your orders
              </li>
              <li className="flex items-center gap-2">
                <img src={star} alt="" />
                Get Automated notifications on estimated delivery time
              </li>
              <li className="flex items-center gap-2">
                <img src={star} alt="" />
                Get instant updates incase of any delays
              </li>
            </ul>
            <button className="text-white w-fit  h-10 md:h-12 px-5 rounded-md font-[500] bg-primary outline-none">
              Join waitlist
            </button>
          </div>
          <figure className="md:w-1/2 flex justify-center items-center">
            <img src={home1} alt="" className="md:w-[50%]" />
          </figure>
        </div>
        <div className="w-full flex flex-col md:flex-row gap-5 md:gap-0 items-center">
          <figure className="md:w-1/2 flex justify-center items-center">
            <img src={home2} alt="" className="md:w-[50%]" />
          </figure>
          10{' '}
          <div className="md:w-1/2 flex flex-col gap-4 md:gap-8 ">
            <h4 className="text-dark text-2xl md:text-[40px] font-[600]">
              Multiple Payment Platform
            </h4>
            <p className="text-light">
              Our AI delivery solution is integrated with multiple
              payment platforms and supports numerous payment options
              which includes online payment getaways, cash on delivery
              or mobile wallet.
            </p>
            <ul className="flex flex-col gap-4 text-light">
              <li className="flex items-center gap-2">
                <img src={star} alt="" />
                Get integrated with multiple payment platform
              </li>
              <li className="flex items-center gap-2">
                <img src={star} alt="" />
                Set up your Gogrocer wallet to pay at anytime
              </li>
              <li className="flex items-center gap-2">
                <img src={star} alt="" />
                Can’t make transfers? No problem. We take cash on
                delivery
              </li>
            </ul>
            <button className="text-white w-fit  h-10 md:h-12 px-5 rounded-md font-[500] bg-primary outline-none">
              Join waitlist
            </button>
          </div>
        </div>
        <div className="w-full flex flex-col-reverse md:flex-row gap-10 md:gap-0 items-center">
          <div className="md:w-1/2 flex flex-col gap-4 md:gap-8 ">
            <h4 className="text-dark text-2xl md:text-[40px] font-[600]">
              Easy to use Interface
            </h4>
            <p className="text-light">
              Our AI delivery solution is designed to give users an
              easy and seamless experience. The app is designed with
              accessibility in mind. The voice option and AI intuitive
              makes it easy for users to place orders.
            </p>
            <ul className="flex flex-col gap-4 text-light">
              <li className="flex items-center gap-2">
                <img src={star} alt="" />
                Place orders in seconds
              </li>
              <li className="flex items-center gap-2">
                <img src={star} alt="" />
                Can’t type? No problem. Tell the AI what you want, we
                got you covered
              </li>
              <li className="flex items-center gap-2">
                <img src={star} alt="" />
                Can’t type? No problem. Tell the AI what you want, we
                got you covered
              </li>
            </ul>
            <button className="text-white w-fit  h-10 md:h-12 px-5 rounded-md font-[500] bg-primary outline-none">
              Join waitlist
            </button>
          </div>
          <figure className="md:w-1/2 flex justify-center items-center">
            <img src={home3} alt="" className="md:w-[50%]" />
          </figure>
        </div>
      </section>
      <section className="bg-[#0F4E08] flex flex-col gap-10 md:gap-16 px-5 md:px-20 py-10 md:py-20">
        <div className="text-white flex flex-col md:grid grid-cols-2 gap-5 md:gap-10 items-center">
          <h3 className="text-2xl md:text-[48px] leading-normal font-[700]">
            GoGrocer Got You <br className="hidden md:block" />{' '}
            Covered
          </h3>
          <p className="md:text-xl">
            Had a long day at work? Too tired to do groceries? Don’t
            like going to the market? Love living stress free? Want to
            enjoy your baby girl life?
          </p>
        </div>
        <div className="flex flex-col gap-5 md:gap-7 md:grid grid-cols-[auto_auto_auto_auto_auto] text-[13px] items-center">
          <nav className="flex gap-1 items-center rounded-md bg-white text-dark w-full md:min-w-fit px-3 py-3">
            <img src={icon1} alt="" />
            Highly rated riders
          </nav>
          <nav className="flex gap-1 items-center rounded-md bg-white text-dark w-full md:min-w-fit px-3 py-3">
            <img src={icon2} alt="" />
            Quality food items and groceries
          </nav>
          <nav className="flex gap-1 items-center rounded-md bg-white text-dark w-full md:min-w-fit px-3 py-3">
            <img src={icon3} alt="" />
            Live updates on orders
          </nav>
          <nav className="flex gap-1 items-center rounded-md bg-white text-dark w-full md:min-w-fit px-3 py-3">
            <img src={icon4} alt="" />
            Quick and easy onboarding
          </nav>
          <nav className="flex gap-1 items-center rounded-md bg-white text-dark w-full md:min-w-fit px-3 py-3">
            <img src={icon5} alt="" />
            24/7 Customer support
          </nav>
        </div>
        <figure
          className="flex md:justify-evenly overflow-x-scroll snap items-center md:pb-[15vh]"
          ref={ref}
        >
          <img
            src={home4}
            alt=""
            className={`min-w-full md:min-w-[unset] transition-all  duration-1000 ease-in-out`}
          />
          <img
            src={home5}
            alt=""
            className={`min-w-full md:min-w-[unset] md:translate-y-[10%] transition-all  duration-1000 ease-in-out`}
          />
          <img
            src={home6}
            alt=""
            className={`min-w-full md:min-w-[unset] md:translate-y-[20%] transition-all  duration-1000 ease-in-out`}
          />
        </figure>
        <nav className="flex justify-center items-center gap-4 md:hidden">
          <button
            className="font-[800] text-xl text-dark bg-white h-10 w-10 flex justify-center items-center rounded-[50%] "
            onClick={() => scroll(-51)}
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="1em"
              viewBox="0 0 320 512"
            >
              <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
            </svg>
          </button>
          <button
            className="font-[800] text-xl text-dark bg-white h-10 w-10 flex justify-center items-center rounded-[50%]"
            onClick={() => scroll(51)}
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="1em"
              viewBox="0 0 320 512"
            >
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </button>
        </nav>
      </section>
      <section className="bg-[#F9F9F9] flex flex-col gap-5 md:gap-10 px-5 md:px-20 py-10 md:py-16 relative">
        <h3 className="text-[20px] md:text-[34px] font-[600] text-dark">
          Everything you need to know
        </h3>
        <p className="text-light text-sm md:text-base md:w-1/2 ">
          If you have any questions you want to ask, feel free to
          <span className="inline text-primary">
            {' '}
            reach out to us!
          </span>
        </p>
        <div className="flex flex-col gap-5 md:gap-10 md:grid grid-cols-3">
          <nav className="flex flex-col gap-4">
            <b className="text-dark md:text-xl">What is Gogrocer?</b>
            <p className="text-light">
              GoGrocer is an AI-driven food delivery and grocery
              platform in Africa, transforming the ordering and
              delivery experience for customers.
            </p>
          </nav>
          <nav className="flex flex-col gap-4">
            <b className="text-dark md:text-xl">How does it work?</b>
            <p className="text-light">
              Harnessing the power of AI, GoGrocer ensures that it
              provides its customers with the easiest way to shop and
              enjoy.
            </p>
          </nav>
          <nav className="flex flex-col gap-4">
            <b className="text-dark md:text-xl">
              Do I need to pay to join the waitlist?
            </b>
            <p className="text-light">
              No, You donot need to pay to join the the waitlist. It’s
              free, All we need is email address.
            </p>
          </nav>
          <nav className="flex flex-col gap-4">
            <b className="text-dark md:text-xl">
              How soon will I get a reply?
            </b>
            <p className="text-light">
              You will get a response in less than 48hrs. At GoGrocer
              responding to our customers on time is something we take
              pride in. .
            </p>
          </nav>
          <nav className="flex flex-col gap-4">
            <b className="text-dark md:text-xl">
              Is it a mobile or a web app?
            </b>
            <p className="text-light">
              We intend to make it accessible to all. Therefore,
              GoGrocer has both a mobile and a web application.
            </p>
          </nav>
          <nav className="flex flex-col gap-4">
            <b className="text-dark md:text-xl">
              Do I need to pay to join the waitlist?
            </b>
            <p className="text-light">
              GoGrocer is an AI-driven food delivery and grocery
              platform in Africa, transforming the ordering and
              delivery experience for customers.
            </p>
          </nav>
        </div>
      </section>
      <section className="px-5 md:px-20 py-10 md:py-20 bg-[#F9F9F9] ">
        <div className="w-full bg-gradient-to-r from-[#0F4E08] to-[#6FC90C] text-center py-10 md:h-[70vh] px-4 md:px-20 text-white flex flex-col gap-10 relative items-center justify-center z-0 rounded-md">
          <img
            src={bg}
            alt=""
            className="absolute w-full h-full top-0 left-0 object-cover z-[-1]"
          />
          <h3 className="text-xl md:text-[48px] leading-normal font-[700]">
            Join the GoGrocer Waitlist and Elevate Your Grocery
            Shopping Experience
          </h3>
          {/* <label className="md:w-1/2 flex gap-1 md:gap-2 items-center justify-center">
            <input
              type="text"
              placeholder="Enter Email Address"
              className="bg-white rounded w-full h-10 md:h-12 px-2 md:px-5 border outline-none placeholder:text-[#A4A4A4] placeholder:text-sm"
            />
            
          </label> */}
          <button className="text-[#393939] font-[600] text-sm rounded min-w-fit h-10 md:h-12 px-3 md:px-8 bg-[#FAFF15] outline-none">
            Join waitlist
          </button>
        </div>
      </section>
      <Footer />
    </div>
  );
}
