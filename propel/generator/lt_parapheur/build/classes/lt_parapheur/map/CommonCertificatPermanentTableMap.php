<?php



/**
 * This class defines the structure of the 'CertificatPermanent' table.
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
class CommonCertificatPermanentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonCertificatPermanentTableMap';

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
        $this->setName('CertificatPermanent');
        $this->setPhpName('CommonCertificatPermanent');
        $this->setClassname('CommonCertificatPermanent');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('Titre', 'Titre', 'VARCHAR', true, 100, '');
        $this->addColumn('Prenom', 'Prenom', 'VARCHAR', true, 100, '');
        $this->addColumn('Nom', 'Nom', 'VARCHAR', true, 100, '');
        $this->addColumn('EMail', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('Certificat', 'Certificat', 'LONGVARCHAR', true, null, null);
        $this->addColumn('service_id', 'ServiceId', 'INTEGER', true, null, -1);
        $this->addColumn('master_key', 'MasterKey', 'CHAR', true, null, '0');
        $this->getColumn('master_key', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', false, null, 0);
        $this->addColumn('CSP', 'Csp', 'VARCHAR', false, 200, '');
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', false, 200, '');
        $this->addColumn('certificat_universelle', 'CertificatUniverselle', 'CHAR', true, null, '0');
        $this->getColumn('certificat_universelle', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('visible', 'Visible', 'CHAR', true, null, '1');
        $this->getColumn('visible', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCertificatPermanentTableMap
