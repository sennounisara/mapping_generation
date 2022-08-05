<?php



/**
 * This class defines the structure of the 'Inscrit' table.
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
class CommonInscritTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonInscritTableMap';

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
        $this->setName('Inscrit');
        $this->setPhpName('CommonInscrit');
        $this->setClassname('CommonInscrit');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('entreprise_id', 'EntrepriseId', 'INTEGER', true, null, 0);
        $this->addColumn('login', 'Login', 'VARCHAR', false, 50, null);
        $this->addColumn('mdp', 'Mdp', 'VARCHAR', false, 40, null);
        $this->addColumn('num_cert', 'NumCert', 'VARCHAR', false, 64, null);
        $this->addColumn('cert', 'Cert', 'LONGVARCHAR', false, null, null);
        $this->addColumn('civilite', 'Civilite', 'BOOLEAN', true, 1, false);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 30, '');
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 30, '');
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 80, '');
        $this->addColumn('codepostal', 'Codepostal', 'VARCHAR', true, 20, '');
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 50, '');
        $this->addColumn('pays', 'Pays', 'VARCHAR', true, 50, '');
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', true, 20, '');
        $this->addColumn('categorie', 'Categorie', 'LONGVARCHAR', false, null, null);
        $this->addColumn('motstitreresume', 'Motstitreresume', 'LONGVARCHAR', false, null, null);
        $this->addColumn('periode', 'Periode', 'TINYINT', true, 3, 0);
        $this->addColumn('siret', 'Siret', 'VARCHAR', true, 5, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', true, 20, '');
        $this->addColumn('code_cpv', 'CodeCpv', 'LONGVARCHAR', false, null, null);
        $this->addColumn('id_langue', 'IdLangue', 'INTEGER', false, null, null);
        $this->addColumn('profil', 'Profil', 'INTEGER', true, 1, 1);
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', false, 80, null);
        $this->addColumn('bloque', 'Bloque', 'CHAR', true, null, '0');
        $this->getColumn('bloque', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_initial', 'IdInitial', 'INTEGER', true, null, 0);
        $this->addColumn('inscrit_annuaire_defense', 'InscritAnnuaireDefense', 'CHAR', true, null, null);
        $this->getColumn('inscrit_annuaire_defense', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 20, null);
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', true, 20, null);
        $this->addColumn('tentatives_mdp', 'TentativesMdp', 'INTEGER', true, 1, 0);
        $this->addColumn('uid', 'Uid', 'VARCHAR', false, 50, null);
        $this->addColumn('tentative_recup_mdp', 'TentativeRecupMdp', 'INTEGER', true, null, null);
        $this->addColumn('date_tentative_recup_mdp', 'DateTentativeRecupMdp', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonInscritTableMap
