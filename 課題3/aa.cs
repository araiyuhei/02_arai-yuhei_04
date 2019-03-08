using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace A_db
{
    #region Aa
    public class Aa
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _naiyou;
        protected DateTime _indate;
        #endregion
        #region Constructors
        public Aa() { }
        public Aa(string name, string naiyou, DateTime indate)
        {
            this._name=name;
            this._naiyou=naiyou;
            this._indate=indate;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Naiyou
        {
            get {return _naiyou;}
            set {_naiyou=value;}
        }
        public virtual DateTime Indate
        {
            get {return _indate;}
            set {_indate=value;}
        }
        #endregion
    }
    #endregion
}