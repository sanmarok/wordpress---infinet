import{x as p,j as s,av as m,aw as d}from"./main.js";import{a as u,R as h}from"./MetaData-476729d9.js";import{I as x}from"./IconButton-18a73260.js";import"./Typography-c1919a6b.js";const R=({tableId:i,rowRef:c,metaData:e,doActions:l})=>{var n,t;const a=u(r=>p(r,i)),o=()=>{l(h.INSERT,{})};return c.current.handleInsert=o,s.jsx("span",{children:a.transactions.insert&&((t=(n=e==null?void 0:e.access)==null?void 0:n.insert)==null?void 0:t.some(r=>r.toUpperCase()==="POST"))&&s.jsx(m,{theme:d,children:s.jsx(x,{onClick:o,color:"primary",children:s.jsx("i",{className:"fa-solid fa-circle-plus"})})})})};export{R as default};
