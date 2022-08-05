<?php



/**
 * This class defines the structure of the 'RPA' table.
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
class CommonRPATableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonRPATableMap';

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
        $this->setName('RPA');
        $this->setPhpName('CommonRPA');
        $this->setClassname('CommonRPA');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('acronymeOrg', 'Acronymeorg', 'VARCHAR', true, 200, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 30, '');
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 30, '');
        $this->addColumn('adresse1', 'Adresse1', 'VARCHAR', true, 80, '');
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', true, 80, '');
        $this->addColumn('codepostal', 'Codepostal', 'VARCHAR', true, 20, '');
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 50, '');
        $this->addColumn('id_service', 'IdService', 'INTEGER', true, null, 0);
        $this->addColumn('Fonction', 'Fonction', 'VARCHAR', false, 200, null);
        $this->addColumn('pays', 'Pays', 'VARCHAR', false, 150, null);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', false, 20, null);
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', false, 20, null);
        $this->addColumn('responsable_archive', 'ResponsableArchive', 'CHAR', true, null, '0');
        $this->getColumn('responsable_archive', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('email', 'Email', 'VARCHAR', false, 50, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 50, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 50, null);
        $this->addColumn('OrganismeRpa', 'Organismerpa', 'VARCHAR', true, 200, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonRPATableMap
