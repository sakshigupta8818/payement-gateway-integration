using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Spark
{
    #region Donate
    public class Donate
    {
        #region Member Variables
        protected int _sno;
        protected string _name;
        protected string _email;
        protected string _address;
        protected string _city;
        protected string _state;
        protected string _zip;
        protected string _amount;
        #endregion
        #region Constructors
        public Donate() { }
        public Donate(string name, string email, string address, string city, string state, string zip, string amount)
        {
            this._name=name;
            this._email=email;
            this._address=address;
            this._city=city;
            this._state=state;
            this._zip=zip;
            this._amount=amount;
        }
        #endregion
        #region Public Properties
        public virtual int Sno
        {
            get {return _sno;}
            set {_sno=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Address
        {
            get {return _address;}
            set {_address=value;}
        }
        public virtual string City
        {
            get {return _city;}
            set {_city=value;}
        }
        public virtual string State
        {
            get {return _state;}
            set {_state=value;}
        }
        public virtual string Zip
        {
            get {return _zip;}
            set {_zip=value;}
        }
        public virtual string Amount
        {
            get {return _amount;}
            set {_amount=value;}
        }
        #endregion
    }
    #endregion
}