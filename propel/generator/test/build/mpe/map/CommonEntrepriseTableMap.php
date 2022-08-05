<?php



/**
 * This class defines the structure of the 'Entreprise' table.
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
class CommonEntrepriseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonEntrepriseTableMap';

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
        $this->setName('Entreprise');
        $this->setPhpName('CommonEntreprise');
        $this->setClassname('CommonEntreprise');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('admin_id', 'AdminId', 'INTEGER', true, null, 0);
        $this->addColumn('siren', 'Siren', 'VARCHAR', false, 20, null);
        $this->addColumn('repmetiers', 'Repmetiers', 'CHAR', true, null, '');
        $this->addColumn('nom', 'Nom', 'LONGVARCHAR', true, null, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 80, '');
        $this->addColumn('codepostal', 'Codepostal', 'VARCHAR', true, 5, '');
        $this->addColumn('villeadresse', 'Villeadresse', 'VARCHAR', true, 50, '');
        $this->addColumn('paysadresse', 'Paysadresse', 'VARCHAR', true, 50, '');
        $this->addColumn('email', 'Email', 'VARCHAR', false, 100, null);
        $this->addColumn('taille', 'Taille', 'INTEGER', false, 2, null);
        $this->addColumn('formejuridique', 'Formejuridique', 'VARCHAR', true, 255, null);
        $this->addColumn('villeenregistrement', 'Villeenregistrement', 'VARCHAR', false, 50, null);
        $this->addColumn('motifNonIndNum', 'Motifnonindnum', 'INTEGER', false, null, null);
        $this->addColumn('ordreProfOuAgrement', 'Ordreprofouagrement', 'VARCHAR', false, 30, null);
        $this->addColumn('dateConstSociete', 'Dateconstsociete', 'DATE', false, null, null);
        $this->addColumn('nomOrgInscription', 'Nomorginscription', 'VARCHAR', false, 30, null);
        $this->addColumn('adrOrgInscription', 'Adrorginscription', 'VARCHAR', false, 80, null);
        $this->addColumn('dateConstAssoc', 'Dateconstassoc', 'DATE', false, null, null);
        $this->addColumn('dateConstAssocEtrangere', 'Dateconstassocetrangere', 'DATE', false, null, null);
        $this->addColumn('nomPersonnePublique', 'Nompersonnepublique', 'VARCHAR', false, 30, null);
        $this->addColumn('nationalite', 'Nationalite', 'CHAR', false, 2, null);
        $this->addColumn('redressement', 'Redressement', 'INTEGER', false, null, null);
        $this->addColumn('paysenregistrement', 'Paysenregistrement', 'VARCHAR', false, 50, null);
        $this->addColumn('sirenEtranger', 'Sirenetranger', 'VARCHAR', false, 20, null);
        $this->addColumn('numAssoEtrangere', 'Numassoetrangere', 'VARCHAR', false, 20, null);
        $this->addColumn('debutExerciceGlob1', 'Debutexerciceglob1', 'VARCHAR', false, 15, '');
        $this->addColumn('finExerciceGlob1', 'Finexerciceglob1', 'VARCHAR', false, 15, '');
        $this->addColumn('debutExerciceGlob2', 'Debutexerciceglob2', 'VARCHAR', false, 15, '');
        $this->addColumn('finExerciceGlob2', 'Finexerciceglob2', 'VARCHAR', false, 15, '');
        $this->addColumn('debutExerciceGlob3', 'Debutexerciceglob3', 'VARCHAR', false, 15, '');
        $this->addColumn('finExerciceGlob3', 'Finexerciceglob3', 'VARCHAR', false, 15, '');
        $this->addColumn('ventesGlob1', 'Ventesglob1', 'VARCHAR', false, 10, '');
        $this->addColumn('ventesGlob2', 'Ventesglob2', 'VARCHAR', false, 10, '');
        $this->addColumn('ventesGlob3', 'Ventesglob3', 'VARCHAR', false, 10, '');
        $this->addColumn('biensGlob1', 'Biensglob1', 'VARCHAR', false, 10, '');
        $this->addColumn('biensGlob2', 'Biensglob2', 'VARCHAR', false, 10, '');
        $this->addColumn('biensGlob3', 'Biensglob3', 'VARCHAR', false, 10, '');
        $this->addColumn('servicesGlob1', 'Servicesglob1', 'VARCHAR', false, 10, '');
        $this->addColumn('servicesGlob2', 'Servicesglob2', 'VARCHAR', false, 10, '');
        $this->addColumn('servicesGlob3', 'Servicesglob3', 'VARCHAR', false, 10, '');
        $this->addColumn('totalGlob1', 'Totalglob1', 'VARCHAR', false, 10, '');
        $this->addColumn('totalGlob2', 'Totalglob2', 'VARCHAR', false, 10, '');
        $this->addColumn('totalGlob3', 'Totalglob3', 'VARCHAR', false, 10, '');
        $this->addColumn('codeape', 'Codeape', 'VARCHAR', true, 20, '');
        $this->addColumn('origine_compte', 'OrigineCompte', 'VARCHAR', false, 255, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 50, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 50, null);
        $this->addColumn('site_internet', 'SiteInternet', 'VARCHAR', true, 50, '');
        $this->addColumn('description_activite', 'DescriptionActivite', 'LONGVARCHAR', false, null, null);
        $this->addColumn('activite_domaine_defense', 'ActiviteDomaineDefense', 'LONGVARCHAR', false, null, null);
        $this->addColumn('annee_cloture_exercice1', 'AnneeClotureExercice1', 'VARCHAR', true, 15, '');
        $this->addColumn('annee_cloture_exercice2', 'AnneeClotureExercice2', 'VARCHAR', true, 15, '');
        $this->addColumn('annee_cloture_exercice3', 'AnneeClotureExercice3', 'VARCHAR', true, 15, '');
        $this->addColumn('effectif_moyen1', 'EffectifMoyen1', 'INTEGER', true, 10, 0);
        $this->addColumn('effectif_moyen2', 'EffectifMoyen2', 'INTEGER', true, 10, 0);
        $this->addColumn('effectif_moyen3', 'EffectifMoyen3', 'INTEGER', true, 10, 0);
        $this->addColumn('effectif_encadrement1', 'EffectifEncadrement1', 'INTEGER', true, 10, 0);
        $this->addColumn('effectif_encadrement2', 'EffectifEncadrement2', 'INTEGER', true, 10, 0);
        $this->addColumn('effectif_encadrement3', 'EffectifEncadrement3', 'INTEGER', true, 10, 0);
        $this->addColumn('pme1', 'Pme1', 'CHAR', false, null, null);
        $this->getColumn('pme1', false)->setValueSet(array (
  0 => '1',
  1 => '0',
));
        $this->addColumn('pme2', 'Pme2', 'CHAR', false, null, null);
        $this->getColumn('pme2', false)->setValueSet(array (
  0 => '1',
  1 => '0',
));
        $this->addColumn('pme3', 'Pme3', 'CHAR', false, null, null);
        $this->getColumn('pme3', false)->setValueSet(array (
  0 => '1',
  1 => '0',
));
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', false, 80, null);
        $this->addColumn('nicSiege', 'Nicsiege', 'VARCHAR', false, 5, null);
        $this->addColumn('acronyme_pays', 'AcronymePays', 'VARCHAR', false, 10, null);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 20, null);
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', true, 20, null);
        $this->addColumn('id_initial', 'IdInitial', 'INTEGER', true, null, 0);
        $this->addColumn('region', 'Region', 'VARCHAR', false, 250, null);
        $this->addColumn('province', 'Province', 'VARCHAR', false, 250, null);
        $this->addColumn('telephone2', 'Telephone2', 'VARCHAR', false, 250, null);
        $this->addColumn('telephone3', 'Telephone3', 'VARCHAR', false, 250, null);
        $this->addColumn('cnss', 'Cnss', 'VARCHAR', false, 250, null);
        $this->addColumn('rc_num', 'RcNum', 'VARCHAR', false, 250, null);
        $this->addColumn('rc_ville', 'RcVille', 'VARCHAR', false, 250, null);
        $this->addColumn('domaines_activites', 'DomainesActivites', 'VARCHAR', false, 255, null);
        $this->addColumn('num_tax', 'NumTax', 'VARCHAR', false, 250, null);
        $this->addColumn('documents_commerciaux', 'DocumentsCommerciaux', 'INTEGER', false, null, null);
        $this->addColumn('intitule_documents_commerciaux', 'IntituleDocumentsCommerciaux', 'VARCHAR', false, 255, null);
        $this->addColumn('taille_documents_commerciaux', 'TailleDocumentsCommerciaux', 'VARCHAR', false, 50, null);
        $this->addColumn('qualification', 'Qualification', 'VARCHAR', false, 255, null);
        $this->addColumn('agrement', 'Agrement', 'VARCHAR', false, 255, null);
        $this->addColumn('moyens_technique', 'MoyensTechnique', 'CLOB', false, null, null);
        $this->addColumn('moyens_humains', 'MoyensHumains', 'CLOB', false, null, null);
        $this->addColumn('compte_actif', 'CompteActif', 'INTEGER', true, 1, 1);
        $this->addColumn('capital_social', 'CapitalSocial', 'VARCHAR', true, 50, null);
        $this->addColumn('ifu', 'Ifu', 'VARCHAR', true, 200, null);
        $this->addColumn('id_agent_createur', 'IdAgentCreateur', 'INTEGER', true, 20, null);
        $this->addColumn('nom_agent', 'NomAgent', 'VARCHAR', true, 200, null);
        $this->addColumn('prenom_agent', 'PrenomAgent', 'VARCHAR', true, 200, null);
        $this->addColumn('adresses_electroniques', 'AdressesElectroniques', 'VARCHAR', false, 255, null);
        $this->addColumn('visible_bourse', 'VisibleBourse', 'CHAR', true, null, '0');
        $this->addColumn('type_collaboration', 'TypeCollaboration', 'VARCHAR', false, 255, null);
        $this->addColumn('entreprise_EA', 'EntrepriseEa', 'CHAR', true, null, '0');
        $this->getColumn('entreprise_EA', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('entreprise_SIAE', 'EntrepriseSiae', 'CHAR', true, null, '0');
        $this->getColumn('entreprise_SIAE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('type_entreprise', 'TypeEntreprise', 'CHAR', false, null, null);
        $this->getColumn('type_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '3',
));
        $this->addColumn('note', 'Note', 'INTEGER', false, 1, null);
        $this->addColumn('code_cpv', 'CodeCpv', 'VARCHAR', false, 255, null);
        $this->addColumn('statut_referencement', 'StatutReferencement', 'INTEGER', false, 1, null);
        $this->addColumn('taille_entreprise', 'TailleEntreprise', 'INTEGER', false, 1, null);
        $this->addColumn('identifiant_fiscale', 'IdentifiantFiscale', 'VARCHAR', true, 200, '');
        $this->addColumn('valide', 'Valide', 'BOOLEAN', true, 1, false);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonContactEntreprise', 'CommonContactEntreprise', RelationMap::ONE_TO_MANY, array('id' => 'id_entreprise', ), null, null, 'CommonContactEntreprises');
        $this->addRelation('CommonInscrit', 'CommonInscrit', RelationMap::ONE_TO_MANY, array('id' => 'entreprise_id', ), null, null, 'CommonInscrits');
        $this->addRelation('CommonPanierEntreprise', 'CommonPanierEntreprise', RelationMap::ONE_TO_MANY, array('id' => 'id_entreprise', ), 'CASCADE', 'CASCADE', 'CommonPanierEntreprises');
        $this->addRelation('CommonBonCommandeParCatalogue', 'CommonBonCommandeParCatalogue', RelationMap::ONE_TO_MANY, array('id' => 'id_entreprise', ), null, null, 'CommonBonCommandeParCatalogues');
        $this->addRelation('CommonExecFactureRelatedByIdEntrepriseCrea', 'CommonExecFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_entreprise_crea', ), null, null, 'CommonExecFacturesRelatedByIdEntrepriseCrea');
        $this->addRelation('CommonExecFactureRelatedByIdEntrepriseModif', 'CommonExecFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_entreprise_modif', ), null, null, 'CommonExecFacturesRelatedByIdEntrepriseModif');
        $this->addRelation('CommonExecInscritContrat', 'CommonExecInscritContrat', RelationMap::ONE_TO_MANY, array('id' => 'id_entreprise', ), null, null, 'CommonExecInscritContrats');
        $this->addRelation('CommonExecRepartition', 'CommonExecRepartition', RelationMap::ONE_TO_MANY, array('id' => 'id_entreprise_crea', ), null, null, 'CommonExecRepartitions');
        $this->addRelation('CommonFacture', 'CommonFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_entreprise', ), null, null, 'CommonFactures');
        $this->addRelation('CommonTReponseElecFormulaire', 'CommonTReponseElecFormulaire', RelationMap::ONE_TO_MANY, array('id' => 'id_entreprise', ), null, null, 'CommonTReponseElecFormulaires');
    } // buildRelations()

} // CommonEntrepriseTableMap
