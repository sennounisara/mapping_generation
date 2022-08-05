<?php



/**
 * This class defines the structure of the 'pf_utilisateur' table.
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
class PfUtilisateurTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.PfUtilisateurTableMap';

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
        $this->setName('pf_utilisateur');
        $this->setPhpName('PfUtilisateur');
        $this->setClassname('PfUtilisateur');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_UTILISATEUR', 'IdUtilisateur', 'INTEGER', true, null, null);
        $this->addColumn('LOGIN', 'Login', 'VARCHAR', false, 50, null);
        $this->addColumn('MOT_DE_PASSE', 'MotDePasse', 'VARCHAR', false, 50, null);
        $this->addColumn('PROFIL', 'Profil', 'CHAR', false, null, null);
        $this->getColumn('PROFIL', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
  3 => '4',
));
        $this->addColumn('NOM_FR', 'NomFr', 'VARCHAR', false, 50, null);
        $this->addColumn('PRENOM_FR', 'PrenomFr', 'VARCHAR', false, 50, null);
        $this->addColumn('NOM_AR', 'NomAr', 'VARCHAR', false, 50, null);
        $this->addColumn('PRENOM_AR', 'PrenomAr', 'VARCHAR', false, 50, null);
        $this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 50, null);
        $this->addColumn('TELEPHONE', 'Telephone', 'VARCHAR', false, 15, null);
        $this->addColumn('ACTIF', 'Actif', 'CHAR', false, null, '1');
        $this->getColumn('ACTIF', false)->setValueSet(array (
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

} // PfUtilisateurTableMap
