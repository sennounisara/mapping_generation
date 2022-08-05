<?php



/**
 * This class defines the structure of the 'FormXmlDestinataireOpoce' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonFormXmlDestinataireOpoceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonFormXmlDestinataireOpoceTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('FormXmlDestinataireOpoce');
        $this->setPhpName('CommonFormXmlDestinataireOpoce');
        $this->setClassname('CommonFormXmlDestinataireOpoce');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_destinataire_opoce', 'IdDestinataireOpoce', 'INTEGER', true, null, null);
        $this->addColumn('xml', 'Xml', 'LONGVARCHAR', true, null, null);
        $this->addColumn('code_retour', 'CodeRetour', 'VARCHAR', false, 255, null);
        $this->addColumn('message_retour', 'MessageRetour', 'VARCHAR', false, 255, null);
        $this->addColumn('id_joue', 'IdJoue', 'VARCHAR', false, 255, null);
        $this->addColumn('date_pub_joue', 'DatePubJoue', 'VARCHAR', false, 255, null);
        $this->addColumn('lien_publication', 'LienPublication', 'VARCHAR', false, 225, null);
        $this->addColumn('no_doc_ext', 'NoDocExt', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonFormXmlDestinataireOpoceTableMap
