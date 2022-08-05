<?php



/**
 * This class defines the structure of the 'EchangeDestinataire' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonEchangeDestinataireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonEchangeDestinataireTableMap';

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
        $this->setName('EchangeDestinataire');
        $this->setPhpName('CommonEchangeDestinataire');
        $this->setClassname('CommonEchangeDestinataire');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_echange', 'IdEchange', 'INTEGER', true, null, 0);
        $this->addColumn('mail_destinataire', 'MailDestinataire', 'VARCHAR', true, 255, '');
        $this->addColumn('ar', 'Ar', 'CHAR', true, null, '0');
        $this->getColumn('ar', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_ar', 'DateAr', 'VARCHAR', true, 25, '');
        $this->addColumn('uid', 'Uid', 'VARCHAR', true, 32, '');
        $this->addColumn('type_ar', 'TypeAr', 'INTEGER', true, null, 0);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', true, null, 0);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEchangeDestinataireTableMap
