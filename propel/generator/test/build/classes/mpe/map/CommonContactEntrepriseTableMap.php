<?php



/**
 * This class defines the structure of the 'Contact_Entreprise' table.
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
class CommonContactEntrepriseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonContactEntrepriseTableMap';

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
        $this->setName('Contact_Entreprise');
        $this->setPhpName('CommonContactEntreprise');
        $this->setClassname('CommonContactEntreprise');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 100, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 100, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 100, null);
        $this->addColumn('adresse_suite', 'AdresseSuite', 'VARCHAR', true, 100, null);
        $this->addColumn('codepostal', 'Codepostal', 'VARCHAR', true, 5, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 50, null);
        $this->addColumn('fonction', 'Fonction', 'VARCHAR', true, 50, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonContactEntrepriseTableMap
